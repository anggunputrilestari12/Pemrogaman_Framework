<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//Step 1
use App\Models\genreModel;

class Genre extends BaseController
{
    //Step 2
    protected $genre;
    //Step 3 buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4
        $this ->genre = new GenreModel();
    }
    public function all()
    {
        $data['semuagenre']= $this->genre->getAllData(); 
        return view("film/semuagenre", $data);
    }
}