<?php

namespace App\Http\Controllers;

use \App\Keltian;
use \App\Penelitian;
use \App\Kunjungan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data_keltian = Keltian::count(); 
        $data_penelitian = Penelitian::count(); 
        $data_kunjungan = Kunjungan::count(); 
        return view('dashboard.index', compact('data_keltian', 'data_penelitian', 'data_kunjungan'));
    }
}