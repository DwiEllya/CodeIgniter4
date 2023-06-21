<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step1
use App\Models\FilmModel;
use App\Models\GenreModel;//tambahan1

class Film extends BaseController
{
    //step 2~
    protected $Film;
    protected $Genre; //tambahan 2
    // step 3 buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step4
        $this->Film = new FilmModel();
        $this->Genre = new GenreModel();//tambahan3
    }
    public function index()
    {
        $data['data_film']=($this->Film->getAllDataJoin());
        return view("Film/index", $data);
        
    }

    public function all(){
        $data['semua_film']=($this->Film->getAllDataJoin());
        return view("Film/semuafilm", $data);
    }
    public function add()
        {
            $data["genre"]=$this->Genre->getAllData();
            return view("Film/add", $data);
        }
    public function store()
    {
        $image =$this->request->getFile('cover');

        $imageName =$image->getRandomName();

        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data=[
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' =>  $imageName,
        ];
        $this->Film->save($data);
        return redirect()->to('/Film');
    }

    public function Film_by_id(){
    dd($this ->Film->getDataByID(1));
    } 
    public function Film_genre (){
        dd($this ->Film->getDataBy('Horor'));
    }
    public function Film_Order(){
        dd($this ->Film->getOrderBy());
    }
    public function Film_limit_five (){
        dd($this ->Film->getLimit());
    }
}