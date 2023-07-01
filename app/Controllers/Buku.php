<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RakBuku;

class Buku extends BaseController
{
    protected $buku;

    public function __construct()
    {
        $this -> buku = new RakBuku();
    }
    public function index()
    {
        $data['buku'] = $this->buku->getBuku();
        return view("buku/index", $data);
    }
}

