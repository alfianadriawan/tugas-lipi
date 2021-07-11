@extends('layouts.masterhome')

@section('contenthome')

<main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Penelitian</h2>

          <ol>
            <li><a href="/">Dashboard</a></li>
            <li>Penelitian</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 entries">
            @foreach ($data_penelitian as $penelitian)
            <article class="entry">
              <div class="entry-img">
                <img src={{$penelitian->getGambar()}} alt="thumbnail" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="/penelitian/{{$penelitian->id}}/detail">{{$penelitian->judul}}</a>
              </h2>
              
              
              <div class="entry-content">
                <p>
                 {{substr($penelitian->deskripsi, 0, 300)}}
                </p>
                <div class="read-more">
                  <a href="/penelitian/{{$penelitian->id}}/detail">Selengkapnya...</a>
                </div>
              </div>
            </article>

            @endforeach

           

            <div class="blog-pagination">
              <ul class="justify-content-center">
                {{$data_penelitian->links()}}
              </ul>
            </div>

          </div>


          <div class="col-lg-4">
            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form method="GET" action="/penelitian">
                  <input name="cari" type="text" value="">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>
              </div>

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Antena <span>(25)</span></a></li>
                  <li><a href="#">Penelitian <span>(12)</span></a></li>
                  <li><a href="#">Radar <span>(5)</span></a></li>
                  <li><a href="#">Satelit <span>(22)</span></a></li>
                  <li><a href="#">Autonomous <span>(8)</span></a></li>
                  <li><a href="#">Riset <span>(14)</span></a></li>
                </ul>

              </div>
              <h3 class="sidebar-title">Recent Posts</h3>
              @foreach ($recent_penelitian as $rpenelitian)
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <span><p style="font-size: 14px" class="text-secondary">{{date('M d, Y', strtotime($rpenelitian->created_at))}}</p></span>
                  <img src="{{$rpenelitian->getGambar()}}" style="height: 70px"  alt="thumbnail">
                  <h4>
                    <a href="/penelitian/{{$rpenelitian->id}}/detail">
                      <p class="text-decoration-none">
                        {{$rpenelitian->judul}}
                      </p>
                    </a>
                  </h4>
                  </div>

              </div>
              @endforeach

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">Antena</a></li>
                  <li><a href="#">Propagasi</a></li>
                  <li><a href="#">Radar</a></li>
                  <li><a href="#">Wifi</a></li>
                  <li><a href="#">Mikrostrip</a></li>
                  <li><a href="#">ESM</a></li>
                  <li><a href="#">ISRA</a></li>
                  <li><a href="#">MIMO</a></li>
                  <li><a href="#">patch persegi</a></li>
                  <li><a href="#">Dipole</a></li>
                  <li><a href="#">Monopole</a></li>
                  <li><a href="#">Flanar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @endsection