<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function indexcrud(){
        return view('artikel.indexcrud');
    }
}
