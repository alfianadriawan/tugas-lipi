<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penelitian;


class PenelitianController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')) {
            $data_penelitian = Penelitian::where('judul','LIKE', '%' .$request->cari. '%')->get();
        } else {
            $data_penelitian = Penelitian::orderBy('id', 'desc')->paginate(3);
            $recent_penelitian = Penelitian::orderBy('id', 'desc')->limit(5)->get();
        }     

        return view('penelitian.index', ['data_penelitian' => $data_penelitian], ['recent_penelitian' => $recent_penelitian]);
    }

    public function indexcrud(Request $request){
        $data_penelitian = Penelitian::orderBy('id', 'desc')->get();
        return view('penelitian.indexcrud', ['data_penelitian' => $data_penelitian]);
    }

    public function show(Request $request){
        return view('penelitian.create');
    }

    public function create(Request $request){   
        $penelitian = Penelitian::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $penelitian->gambar = $request->file('gambar')->getClientOriginalName();
            $penelitian->save();        
        }
        return redirect('/penelitiancrud')->with('sukses', 'Data Berhasil Ditambahkan !!!');
    }

    public function edit($id){
        $penelitian = Penelitian::find($id);
        return view('penelitian.edit', ['penelitian' => $penelitian]);
    }

    public function update(Request $request, $id){
        $penelitian = Penelitian::find($id);
        $penelitian->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $penelitian->gambar = $request->file('gambar')->getClientOriginalName();
            $penelitian->save();        
        }
        return redirect('/penelitiancrud')->with('sukses', 'Data Berhasil Diupdate !!!');
    }

    public function delete($id){
        $penelitian = Penelitian::find($id);
        $penelitian->delete();
        return redirect('/penelitiancrud')->with('sukses', 'Data Berhasil Dihapus !!!');
    }

    public function detail($id){
        $penelitian = Penelitian::find($id);
        return view('penelitian.detail', ['penelitian' => $penelitian]);
    }
    
}
