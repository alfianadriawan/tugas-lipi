@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Data Penelitian</h3>
                        </div>
                        <div class="panel-body">
                            <div class="container-fluid">
                                <form action="/kunjungancrud/create" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                    {{-- Judul --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul Kunjungan</label>
                                        <input name="judul" type="text" class="form-control"placeholder="Masukkan Judul">
                                    </div>
                                     
                                    {{-- Deskripsi --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Deskripsi</label>
                                        <textarea name="desc" class="form-control" rows="5" id="comment"></textarea>
                                    </div>

                                    {{-- Gambar --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gambar</label>
                                        <input name="gambar" type="file" class="form-control-file border">
                                    </div>                                                         
                                    <br>
                                    <br>
                                    <button type="submit" class="mt-5 btn btn-primary">Buat Data</button>
                                  </form>
                            </div>        
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>
@stop