<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeltianController extends Controller
{
    public function index(){
        $data_keltian = \App\Keltian::all();
        return view('keltian.index', ['data_keltian' => $data_keltian]);
    }

    public function create(Request $request){
        \App\Keltian::create($request->all());
        return redirect('/keltian')->with('sukses', 'Data Berhasil Dibuat !!!');
    }

    public function edit($id){
        $keltian = \App\Keltian::find($id);
        return view('keltian/edit', ['keltian' => $keltian]);
    }

    public function update(Request $request, $id){
        $keltian = \App\Keltian::find($id);
        $keltian->update($request->all());
        return redirect('/keltian')->with('sukses', 'Data Berhasil Diupdate !!!');
    }
}
