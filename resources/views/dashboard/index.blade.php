@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dashboard</h3>
                            <p class="panel-subtitle">Halaman Admin</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-user"></i></span>
										<p>
											<span class="number">{{$data_keltian}}</span>
											<span class="title">Keltian</span>
										</p>
									</div>
								</div>

                                <div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-bookmark"></i></span>
										<p>
											<span class="number">{{$data_penelitian}}</span>
											<span class="title">Penelitian</span>
										</p>
									</div>
								</div>

                                <div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-book"></i></span>
										<p>
											<span class="number">{{$data_kunjungan}}</span>
											<span class="title">Kunjungan</span>
										</p>
									</div>
								</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        
@stop