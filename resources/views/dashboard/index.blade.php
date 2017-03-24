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

    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
