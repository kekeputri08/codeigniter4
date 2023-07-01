<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{

protected $table = "film";
protected $primarykey = "id";
protected $useAutoIncrement = true ;
protected $allowedFields = ['nama_film', 'id_genre', 'duration', 'cover'];


public function getAllData()
{
   return $this->join('genre', 'film.id_genre = genre.id_genre')->findAll();
}

public function getDataById($id)
{
   return $this->find($id);
}


 //   public function getFilm()
//    {
 //           $data=[
 //               [
 //                   "nma_Film" => "5 cm",
 //                   "genre"    => "Adventure",
 //                   "duration" => "1 jam 2 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Transformers",
 //                   "genre"    => "Action",
 //                   "duration" => "1 jam 30 menit"
 //               ],
 //               [
 //                   "nma_Film" => "fast and Farious",
 //                   "genre"    => "Horor",
 //                   "duration" => "1 jam 50 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Avatar",
 //                   "genre"    => "Action",
 //                   "duration" => "3 jam 2 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Kungfu Panda",
 //                   "genre"    => "Action Kartun",
 //                   "duration" => "2 jam 15 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Upin Ipin",
 //                   "genre"    => "Fiksi",
 //                   "duration" => "1 jam "
 //               ],
 //               [
 //                   "nma_Film" => "KKN Desa Penari",
 //                   "genre"    => "Horor",
 //                   "duration" => "2 jam 35 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Atlantic",
 //                   "genre"    => "Adventure",
 //                   "duration" => "3 jam 25 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Eggnoid",
 //                   "genre"    => "Fiksi",
 //                   "duration" => "5 jam 11 menit"
 //               ],
 //               [
 //                   "nma_Film" => "Evil dead rise",
 //                   "genre"    => "Adventure and Horor",
 //                   "duration" => "2 jam 10 menit"
 //               ],
//          ];
//                return $data;
//    }
}