<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table                ='genre';
    protected $primaryKey           ='id'; //digunakan saat insert database
    protected $useAutoIncrement     =true; 
    protected $allowFields          =[]; //digunakan ketika insert atau update, ditulis didalam sini

    public function getGenre(){

    }
    public function getAllDataJoin()
    {
       $query =  $this-> db ->table("genre")
        ->select("genre.*,genre.nama_genre")
        ->join("film","genre.id_genre = film.id_genre");
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

