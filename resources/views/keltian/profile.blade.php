@extends('layouts.master')
 
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{$keltian->getAvatar()}}" class="img-circle overflow-hidden" style="width: 150px; height: 150px" alt="Avatar">
                                <h3 class="name">{{$keltian->nama}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        45 <span>Projects</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Profile</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Email <span>{{$keltian->email}}</span></li>
                                    <li>Agama <span>{{$keltian->agama}}</span></li>
                                    <li>Jenis Kelamin <span>@if ($keltian->jenis_kelamin == 'L')
                                        Laki-Laki
                                    @else
                                        Perempuan
                                    @endif</span></li>
                                    <li>ALamat <span>{{$keltian->alamat}}</span></li>
                                </ul>
                            </div>
                            <div class="text-center"><a href="/keltian/{{$keltian->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <h4 class="heading">{{$keltian->nama}} Award's</h4>
                        <!-- END AWARDS -->
                        <!-- TABBED CONTENT -->
                        
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-bottom-left1">
                                <ul class="list-unstyled activity-timeline">
                                    <li>
                                        <i class="fa fa-check activity-icon"></i>
                                        <h4>Prosiding = {{$keltian->prosiding}}</h4>
                                    </li>
                                    <li>
                                        <i class="fa fa-check activity-icon"></i>
                                        <h4>Jurnal = {{$keltian->jurnal}}</h4>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <!-- END TABBED CONTENT -->
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop