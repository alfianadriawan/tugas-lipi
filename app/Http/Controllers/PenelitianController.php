<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index(Request $request){
        return view('penelitian.index');
    }

    public function indexcrud(Request $request){
        return view('penelitian.indexcrud');
    }
}
