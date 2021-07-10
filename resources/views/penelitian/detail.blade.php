@extends('layouts.masterhome')

@section('contenthome')
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
      
              <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Penelitian</h2>
      
                <ol>
                  <li><a href="/">Dashboard</a></li>
                  <li>Penelitian</li>
                  <li>Detail Penelitian</li>
                </ol>
              </div>
      
            </div>
          </section>

          <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="jumbotron">
                    <h1 class="display-5 text-uppercase mt-n3">{{$penelitian->judul}}</h1>
                    <span class="badge badge-primary">{{$penelitian->status}} - {{$penelitian->created_at}}</span>
                    
                    <hr class="my-4">
                    <img class="mx-auto d-block" src="{{$penelitian->getGambar()}}" alt="thumbnail">
                    <br>
                    <br>
                    <p class="text-justify px-2">{{$penelitian->deskripsi}}</p>
                  </div>
            </div>
          </section>
    </main>
@endsection