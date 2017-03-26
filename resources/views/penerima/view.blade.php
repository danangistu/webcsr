@extends('layouts.default')
@section('title')View Pelayanan Pendidikan @endsection
@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Bantuan Pelayanan Pendidikan</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('pendidikan') }}">Pelayanan Pendidikan</a></li>
        <li><a href="{{ url('pendidikan/penerima') }}">Penerima Bantuan Pendidikan</a></li>
        <li class="active">View Data</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <h4 class="text-thin">View Data Penerima</h4>
        <table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <td width="20%" class="text-center">Nama</td>
                    <td>{{ $model->nama }}</td>
                </tr>
                <tr>
                    <td class="text-center">Tanngal Lahir</td>
                    <td>{{ $model->birthdate }}</td>
                </tr>
                <tr>
                    <td class="text-center">Alamat</td>
                    <td>{{ $model->alamat }}</td>
                </tr>
                <tr>
                    <td class="text-center">Pendidikan</td>
                    <td>{{ $model->pendidikan }}</td>
                </tr>
                <tr>
                    <td class="text-center">Jumlah Biaya</td>
                    <td>{{ $model->biaya }}</td>
                </tr>
                <tr>
                    <td class="text-center">Keterangan</td>
                    <td>{{ $model->keterangan }}</td>
                </tr>
                <tr>
                    <td class="text-center">Foto</td>
                    <td><img src="{{ url('contents/pendidikan/foto/'.$model->foto) }}" height="250"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
