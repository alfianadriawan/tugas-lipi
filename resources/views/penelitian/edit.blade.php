@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel">
                      <div class="panel-heading">
                          <h3 class="panel-title">Update Data Penelitian</h3>
                      </div>
                      <div class="panel-body">
                          <div class="container-fluid">
                              <form action="/penelitiancrud/{{$penelitian->id}}/update" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}


                                  {{-- Judul --}}
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Judul Penelitian</label>
                                      <input name="judul" type="text" class="form-control"placeholder="Masukkan Judul" value="{{$penelitian->judul}}">
                                  </div>

                                  {{-- Status --}}
                                  <div class="form-group">
                                      <label for="inputState">Status</label>
                                      <select name="status" id="inputState" class="form-control">
                                        <option value="draft" @if($penelitian->status == 'draft') selected @endif>Draft</option>
                                      <option value="published" @if($penelitian->status == 'published') selected @endif>Published</option>
                                      </select>
                                  </div>
                                  
                                  {{-- Deskripsi --}}
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Deskripsi</label>
                                      <textarea name="deskripsi" class="form-control" rows="5" id="comment">{{$penelitian->deskripsi}}</textarea>
                                  </div>
                                  
                                  {{-- Gambar --}}
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Thumbnail</label>
                                      <input name="gambar" type="file" class="form-control-file border">
                                  </div>

                                  {{-- Video --}}
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Video</label>
                                      <input name="video" type="file" class="form-control-file border">
                                  </div>

                                  
                                  
                                  <br>
                                  <br>
                                  <button type="submit" class="mt-5 btn btn-primary">Update Data</button>
                                </form>
                          </div>        
                  </div>
              </div>         
          </div>
      </div>
  </div>
</div>
@stop