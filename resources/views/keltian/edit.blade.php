@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2>Edit Data</h2>
                        </div>
                        <div class="panel-body">
                            <form action="/keltian/{{$keltian->id}}/update" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                {{-- Nama --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input name="nama" type="text" class="form-control"placeholder="Masukkan Nama" value="{{$keltian->nama}}">
                                </div>

                                {{-- Agama --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Agama</label>
                                    <input name="agama" type="text" class="form-control"placeholder="Masukkan Agama" value="{{$keltian->agama}}">
                                </div>

                                {{-- Jenis Kelamin --}}
                                <div class="form-group">
                                    <label for="inputState">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="inputState" class="form-control">
                                        <option value="L" @if($keltian->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if($keltian->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                

                                {{-- Email --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Email</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" aria-describedby="emailHelp" value="{{$keltian->email}}">
                                </div>
                                

                                {{-- Password --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Masukkan Password Baru">
                                </div>

                                {{-- Avatar --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Avatar</label>
                                    <input name="avatar" type="file" class="form-control">
                                </div>  

                                {{-- Alamat --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <textarea name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat">{{$keltian->alamat}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-warning mt-4">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop