<?php

namespace App\Http\Controllers;

use App\Keltian;
use Illuminate\Http\Request;
use \App\Kunjungan;

class KunjunganController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')) {
            $data_kunjungan = Kunjungan::where('judul','LIKE', '%' .$request->cari. '%')->get();
        } else {
            $data_kunjungan = Kunjungan::orderBy('id', 'desc')->get();
            $recent_kunjungan = Kunjungan::orderBy('id', 'desc')->limit(5)->get();
        }     

        return view('kunjungan.index', ['data_kunjungan' => $data_kunjungan], ['recent_kunjungan' => $recent_kunjungan]);
    }

    public function indexcrud(Request $request)
    {
        $data_kunjungan = Kunjungan::orderBy('id', 'desc')->get();
        return view('kunjungan.indexcrud', ['data_kunjungan' => $data_kunjungan]);
    }

    public function show(Request $request){
        return view('kunjungan.create');
    }

    public function create(Request $request){   
        $kunjungan = Kunjungan::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $kunjungan->gambar = $request->file('gambar')->getClientOriginalName();
            $kunjungan->save();        
        }
        return redirect('/kunjungancrud')->with('sukses', 'Data Berhasil Ditambahkan !!!');
    }

    public function edit($id){
        $kunjungan = Kunjungan::find($id);
        return view('kunjungan.edit', ['kunjungan' => $kunjungan]);
    }

    public function update(Request $request, $id){
        $kunjungan = Kunjungan::find($id);
        $kunjungan->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $kunjungan->gambar = $request->file('gambar')->getClientOriginalName();
            $kunjungan->save();        
        }
        return redirect('/kunjungancrud')->with('sukses', 'Data Berhasil Diupdate !!!');
    }

    public function delete($id){
        $kunjungan = Kunjungan::find($id);
        $kunjungan->delete();
        return redirect('/kunjungancrud')->with('sukses', 'Data Berhasil Dihapus !!!');
    }

}
