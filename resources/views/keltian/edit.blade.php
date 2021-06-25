@extends('layouts.master')

@section('content')

    @if (session('sukses'))       
        <div class="alert alert-warning" role="alert">
            {{session('sukses')}}
        </div>    
    @endif
    <div class="row">
    <form action="/keltian/{{$keltian->id}}/update" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" value="{{$keltian->nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Email" value="{{$keltian->email}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agama</label>
            <input name="agama" type="text" class="form-control" placeholder="Masukkan Agama" value="{{$keltian->agama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="L" @if($keltian->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                <option value="P" @if($keltian->jenis_kelamin == 'P') selected @endif>Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning mt-4">Update</button>
    </form>
    </div>

@endsection  