<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $Genre;
    // step 3 buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step4
        $this->Genre = new GenreModel();
    }
    public function index()
    {
        $data['data_genre']=($this->Genre->getAllDataJoin());
        return view("Genre/index", $data);
        
    }

    public function all(){
        $data['semua_genre']=($this->Genre->getAllDataJoin());
        return view("Genre/semuagenre", $data);
    }


    public function Genre_by_id(){
    dd($this ->Genre->getDataByID(1));
    } 
    public function Genre_genre (){
        dd($this ->Genre->getDataBy('Horor'));
    }
    public function Genre_Order(){
        dd($this ->Genre->getOrderBy());
    }
    public function Genre_limit_five (){
        dd($this ->Genre->getLimit());
    }
}