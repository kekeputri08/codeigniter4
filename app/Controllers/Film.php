<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FilmModel;
use App\Models\GenreModel;

class Film extends BaseController
{
    // 2
    protected $film;
    protected $genre;


    //3 
    public function __construct()
    {
        $this -> film = new FilmModel();
        $this -> genre = new GenreModel();
    }
    public function index()
    {
        $data['films'] = $this->film->getFilm();
        return view("film/index", $data);
    }

    public function all()
    {
      $data['semuafilm'] = $this->film->getAllData();
      return view("Film/semuafilm", $data);
    }

    public function film()
    {
      $data['semuafilm'] = $this->film->getAllData();
      return view("film/film", $data);
    }

    public function genre()
    {
      $data['semuagenre'] = $this->genre->getAllGenre();
      return view("film/genre", $data);
    }

    public function about()
    {
      return view("film/about");
    }

    public function add() 
    {
      $data['semuagenre'] = $this->genre->getAllGenre();
      $data['errors'] = session('errors');
      return view("film/add", $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover'     => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        $image = $this->request->getFile('cover');
        $imageName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName,
        ];
        $this->film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('film/film');
    }

    public function update($id)
    {
        $decryptedId = decryptUrl($id);
        $data["semuagenre"] = $this->genre->getAllGenre();
        $data["errors"] = session('errors');
        $data["film"] = $this->film->getDataByID($decryptedId);
        return view("film/edit", $data);
    }

    public function edit()
    {
    $validation = $this->validate([
        'nama_film' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom Nama Film harus diisi'
            ]
        ],
        'id_genre' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom Genre harus diisi'
            ]
        ],
        'duration' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Kolom Durasi harus diisi'
            ]
        ],
        'cover' => [
            'rules' => 'mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
            'errors' => [
                'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
            ]
        ]
    ]);

    if (!$validation) {
        $errors = \Config\Services::validation()->getErrors();
        return redirect()->back()->withInput()->with('errors', $errors);
    }

    //ambil data lama
    $film = $this->film->find($this->request->getPost('id'));

    //tambah request id
    $data = [
        'id' => $this->request->getPost('id'),
        'nama_film' => $this->request->getPost('nama_film'),
        'id_genre' => $this->request->getPost('id_genre'),
        'duration' => $this->request->getPost('duration'),
    ];

    //cek cover apakah ada cover yang diupload
    $cover = $this->request->getFile('cover');
    
    if ($cover->isValid() && !$cover->hasMoved()) {
        //generate nama file yang unik
        $imageName = $cover->getRandomName();
        //pindahkan file ke direktori penyimpanan
        $cover->move(ROOTPATH . 'public/assets/cover/', $imageName);
        //hapus file lama jika ada
        if ($film['cover']) {
            unlink(ROOTPATH . 'public/assets/cover/' . $film['cover']);
        }
        //jika ada tambahkan array cover pada variabel $data
        $data['cover'] = $imageName;
    }

    $this->film->save($data);

    session()->setFlashdata('success', 'Data berhasil diperbarui.');

    return redirect()->to('film/film');
    }

    public function destroy($id)
    {
        $decryptedId = decryptUrl($id);
        $this->film->delete($decryptedId);
        session()->setFlashdata('success', 'Data berhasil dihapus.');

        return redirect()->to('film/film');
    }
  

}
