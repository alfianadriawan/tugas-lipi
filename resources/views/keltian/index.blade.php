@extends('layouts.master')
 
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Kelompok Penelitian Antena Dan Propagasi LIPI</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <form method="GET" action="/keltian">
                                            <div class="input-group">
                                                <input name="cari" type="search" value="" class="form-control" placeholder="Search">
                                                <span class="input-group-btn"><button type="submit" class="btn btn-outline-success">Cari</button></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-primary mx-4" data-toggle="modal" data-target="#staticBackdrop">
                                            Tambahkan +
                                        </button>   
                                    </div>
                                   
                                </div>
                                <table class="table table-hover mt-8">
                                    <thead>
                                        <tr>
                                            <th>NAMA</th>
                                            <th>AGAMA</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>EMAIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_keltian as $keltian)
                                        <tr>
                                            <td><a href="/keltian/{{$keltian->id}}/profile" style="color: gray">{{$keltian->nama}}</a></td>
                                            <td>{{$keltian->agama}}</td>
                                            <td>{{$keltian->jenis_kelamin}}</td>
                                            <td>{{$keltian->email}}</td>
                                            <td>
                                                <a href="/keltian/{{$keltian->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/keltian/{{$keltian->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ?')">Delete</a>
                                            </td>
                                        </tr>  
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="staticBackdropLabel">Tambahkan Member</h3>
            </div>
            <div class="modal-body">
                <form action="/keltian/create" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control"placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input name="agama" type="text" class="form-control"placeholder="Masukkan Agama">
                    </div>
                    <div class="form-group">
                        <label for="inputState">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="inputState" class="form-control">
                          <option selected>Pilih...</option>
                          <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                        </select>
                      </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection    