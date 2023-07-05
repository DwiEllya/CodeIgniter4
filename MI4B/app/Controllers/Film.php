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
            $data["errors"] = session('errors');
            return view("Film/add", $data);
        }
    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom nama film harus diisi'
                ]
            ],
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom genre harus diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom durasi harus diisi'
                ]
            ],
            'cover' => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'kolom cover harus berisi file.',
                    'mime_in' => 'tipe file pada kolom cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada kolom cover melebihi batas maximum'
                ]
            ]       
        ]);

        if (!$validation){
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $image = $this->request->getFile('cover');

        $imageName =$image->getRandomName();

        $image->move(ROOTPATH . 'public/assets/film/', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' =>  $imageName,
        ];
        $this->Film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/film');
    }
    public function update($id)
    {
        $data["genre"] = $this->genre->getAllData();
        $data["errors"] = session('errors');
        $data["semuafilm"] =$this->Film->getDataByID($id);
        return view("film/update", $data);
    }
}