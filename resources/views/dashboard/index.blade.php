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
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
