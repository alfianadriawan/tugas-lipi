@extends('layouts.master')
 
@section('content')

    @if (session('sukses'))       
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>    
    @endif
    <div class="row">
        <div class="col-7">
            <h3>Kelompok Penelitian Antena Dan Propagasi LIPI</h3>
        </div>
        <div class="col-5">
            <div class="d-flex flex-row justify-content-end">
                <form class="d-flex mr-2" method="GET" action="/keltian">
                    <input name="cari" class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success pr-2" type="submit">Search</button>
                </form>
                <button type="button" class="btn btn-primary mx-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambahkan +
                </button>               
            </div>
           
        </div>
        <table class="table table-hover mt-2 text-center">
            <tr>
                <th>NAMA</th>
                <th>AGAMA</th>
                <th>JENIS KELAMIN</th>
                <th>EMAIL</th>
                <th>AKSI</th>
            </tr>
            @foreach ($data_keltian as $keltian)
            <tr>
                <td>{{$keltian->nama}}</td>
                <td>{{$keltian->agama}}</td>
                <td>{{$keltian->jenis_kelamin}}</td>
                <td>{{$keltian->email}}</td>
                <td>
                    <a href="/keltian/{{$keltian->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/keltian/{{$keltian->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ?')">Delete</a>
                </td>
            </tr>  
            @endforeach
        </table>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/keltian/create" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                        <input name="agama" type="text" class="form-control" placeholder="Masukkan Agama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="modal-footer mb-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection    