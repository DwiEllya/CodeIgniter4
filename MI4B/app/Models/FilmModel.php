<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table                ='film';
    protected $primaryKey           ='id'; //digunakan saat insert database
    protected $useAutoIncrement     =true; 
    protected $allowedFields      = ['nama_film', 'id_genre', 'duration', 'cover'];//digunakan ketika insert atau update, ditulis didalam sini

    public function getFilm(){
        $data= [
        [
            "nama_film" => "Sewu Dino",
            "id_genre" => "Horor",
            "duration" => "1 jam 43 menit"
        ],
        [
            "nama_film" => "KKN di Desa Penari",
            "id_genre" => "Horor",
            "duration" => "2 jam 5 menit"
        ],
        [
            "nama_film" => "Avatar",
            "id_genre" => "Fantasi",
            "duration" => "3 jam 43 menit"
        ],
        [
            "nama_film" => "The Litle Mermaid",
            "id_genre" => "Fantasi",
            "duration" => "2 jam 43 menit"
        ],
        [
            "nama_film" => "Im Perfect",
            "id_genre" => "Comedy",
            "duration" => "2 jam 10 menit"
        ]
        ];
        return $data;
    
    }
    public function getAllDataJoin()
    {
       $query =  $this-> db ->table("film")
        ->select("film.*,genre.nama_genre")
        ->join("genre","genre.id_genre = film.id_genre");
        return $query-> get()-> getResultArray();
    }

    //digunakan untuk mengambil semua data dari tabel
    public function getAllData()
    { 
       return $this-> findAll();
    }
    //Fungsi ini digunakan untuk mencari data berdasarkan ID
    public function getDataByID($id)
    {
        return $this->find($id);
    }
    //Fungsi ini digunakan untuk melakukan query dengan kondisi WHERE
    public function getDataBy($data)
    {
        return $this->where('genre', $data)->findAll();
    }
    //digunakan untuk mengurutkan hasil query berdasarkan kolom tertentu
    public function getOrderBy()
    {
        return $this->OrderBy('created_at', 'desc')->findAll();
    }
    //digunakan untuk membatasi jumlah data yang diambil dari tabel
    public function getLimit()
    {
        return $this->limit(5)->findAll();
    }

}

