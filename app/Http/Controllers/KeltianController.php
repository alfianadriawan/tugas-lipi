<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class KeltianController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')) {
            $data_keltian = \App\Keltian::where('nama','LIKE', '%' .$request->cari. '%')->get();
        } else {
            $data_keltian = \App\Keltian::all();
        }     
        return view('keltian.index', ['data_keltian' => $data_keltian]);
    }

    public function create(Request $request){
        //Insert table users
        $user = new \App\User;
        $user->role = 'admin';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(60);
        $user->save();

        //Insert table keltian
        $request->request->add(['user_id' => $user->id]);
        $keltian = \App\Keltian::create($request->all());

        return redirect('/keltian')->with('sukses', 'Data Berhasil Dibuat !!!');
    }

    public function edit($id){
        $keltian = \App\Keltian::find($id);
        return view('keltian/edit', ['keltian' => $keltian]);
    }

    public function update(Request $request, $id){
        $keltian = \App\Keltian::find($id);
        $keltian->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $keltian->avatar = $request->file('avatar')->getClientOriginalName();
            $keltian->save();        
        }
        return redirect('/keltian')->with('sukses', 'Data Berhasil Diupdate !!!');
    }

    public function delete($id){
        $keltian = \App\Keltian::find($id);
        $keltian->delete();
        return redirect('/keltian')->with('sukses', 'Data Berhasil Dihapus !!!');
    }

    public function profile($id){
        $keltian = \App\Keltian::find($id);
        return view('keltian.profile', ['keltian' => $keltian]);
    }
}
