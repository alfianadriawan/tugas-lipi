@extends('layouts.masterhome')

@section('contenthome')

    <main id="main">
      <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Kunjungan</h2>
  
            <ol>
              <li><a href="/">Dashboard</a></li>
              <li>Kunjungan</li>
            </ol>
          </div>
  
        </div>
      </section>

      <section class="service-details">
        <div class="container">
          <div class="row d-flex flex-row">
            @foreach ($data_kunjungan as $kunjungan)
              <div class="col-6 align-items-stretch">
               <div class="card">
                <div class="card-img">
                  <img src="{{$kunjungan->getGambar()}}" alt="thumbnail">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="#">{{$kunjungan->judul}}</a></h5>
                  <p class="card-text">{{$kunjungan->desc}}</p>  
                </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
      

    </main>
@stop
