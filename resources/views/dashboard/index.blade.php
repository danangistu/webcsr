@extends('layouts.default')
@section('title')Dashboard @endsection
@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Dashboard</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <!-- <div class="col-lg-12"> -->
            <!--Profile Heading-->
            <!--===================================================-->
            <div class="panel">
                <div class="panel-bg-cover">
                    <img class="img-responsive" src="{{ asset('contents/'.$setting->dashboard_banner) }}" alt="Image">
                </div>
                <div class="panel-body">
                    <h4>Selamat Datang {{ auth()->user()->name }}</h4>
                    <h2>{{ $setting->dashboard_title }} </h2>
                    {!! $setting->dashboard_description !!}
                </div>
            </div>
        <!-- </div> -->
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-info panel-colorful">
                        <div class="panel-body text-center">
                            <p class="text-uppercase mar-btm text-bg">Pelayanan Masyarakat</p>
                            <i class="fa fa-life-buoy fa-5x"></i>
                            <hr>
                            <p class="h2 text-thin">{{ $count_pelayanan }} DATA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-mint panel-colorful">
                        <div class="panel-body text-center">
                            <p class="text-uppercase mar-btm text-bg">Pembinaan Hubungan</p>
                            <i class="fa fa-link fa-5x"></i>
                            <hr>
                            <p class="h2 text-thin">{{ $count_hubungan }} DATA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-warning panel-colorful">
                        <div class="panel-body text-center">
                            <p class="text-uppercase mar-btm text-bg">Pemberdayaan</p>
                            <i class="fa fa-asterisk fa-5x"></i>
                            <hr>
                            <p class="h2 text-thin">{{ $count_pemberdayaan }} DATA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="panel panel-pink panel-colorful">
                        <div class="panel-body text-center">
                            <p class="text-uppercase mar-btm text-bg">Regulasi</p>
                            <i class="fa fa-clipboard fa-5x"></i>
                            <hr>
                            <p class="h2 text-thin">{{ $count_regulasi }} DATA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
