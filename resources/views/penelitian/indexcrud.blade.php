@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Penelitian</h3>
                    <p class="panel-subtitle">CRUD Penelitian</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">                                                  
                             <a href="/penelitiancrud/show" class="btn btn-primary">Create Data</a>    
                        </div>                                 
                    </div>
                    <br>
                    <table class="table table-hover mt-8">
                        <thead>
                            <tr>
                                <th>JUDUL</th>
                                <th>STATUS</th>
                                <th>PEMBUATAN</th>
                                <th>PEMBARUAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_penelitian as $penelitian)
                            <tr>
                                <td class="col-md-4" style="color: gray">{{$penelitian->judul}}</td>
                                <td>{{$penelitian->status}}</td>
                                <td>{{$penelitian->created_at}}</td>
                                <td>{{$penelitian->updated_at}}</td>
                                <td>
                                    <a href="/penelitiancrud/{{$penelitian->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/penelitiancrud/{{$penelitian->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ?')">Delete</a>
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
@stop