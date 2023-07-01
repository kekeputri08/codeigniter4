<?php

namespace App\Models;

use CodeIgniter\Model;

class RakBuku extends Model
{
    
        public function getBuku()
        {
                $data=[
                    [
                        "Judul_Buku"   => " The Great Adventure ",
                        "Genre"        => " Petualangan ",
                        "Tahun_Terbit" => " 2018 ",
                        "Penulis"      => " John Smith "
                    ],
                    [
                        "Judul_Buku"   => " Love and Betrayal ",
                        "Genre"        => " Romansa ",
                        "Tahun_Terbit" => "  2021 ",
                        "Penulis"      => "  Emily Johnson "
                    ],
                    [
                        "Judul_Buku"   => " Mystery at Midnight ",
                        "Genre"        => " Misteri ",
                        "Tahun_Terbit" => " 2015 ",
                        "Penulis"      => "  Jessica Roberts "
                    ],
                    [
                        "Judul_Buku"   => " The Power of Dreams ",
                        "Genre"        => " Motivasi ",
                        "Tahun_Terbit" => " 2019 ",
                        "Penulis"      => " Michael Anderson "
                    ],
                    [
                        "Judul_Buku"   => " Beyond the Horizon ",
                        "Genre"        => " Fiksi ilmiah ",
                        "Tahun_Terbit" => " 2020 ",
                        "Penulis"      => " Sarah Thompson "
                    ],
                    [
                        "Judul_Buku"   => " The Art of Negotiation ",
                        "Genre"        => " Bisnis dan keuangan ",
                        "Tahun_Terbit" => " 2017 ",
                        "Penulis"      => " David Williams "
                    ],
                    [
                        "Judul_Buku"   => " Forgotten Memories ",
                        "Genre"        => " Fiksi psikologis ",
                        "Tahun_Terbit" => " 2014 ",
                        "Penulis"      => " Samantha Davis "
                    ],
                    [
                        "Judul_Buku"   => " The Secrets of Success ",
                        "Genre"        => " Pengembangan diri ",
                        "Tahun_Terbit" => " 2016 ",
                        "Penulis"      => " Robert Johnson "
                    ],
                    [
                        "Judul_Buku"   => " The Lost Civilization ",
                        "Genre"        => " Sejarah ",
                        "Tahun_Terbit" => " 2012 ",
                        "Penulis"      => " Andrew Wilson "
                    ],
                    [
                        "Judul_Buku"   => " Infinite Possibilities ",
                        "Genre"        => " Sains dan teknologi ",
                        "Tahun_Terbit" => " 2023 ",
                        "Penulis"      => " Jennifer Adams "
                    ],
                
                ];
                    return $data;
        }
    
}
