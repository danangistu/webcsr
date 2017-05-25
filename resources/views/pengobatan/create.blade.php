@extends('layouts.default')
@section('title')Create Pelayanan Kesehatan @endsection
@push('style')
<link href="{{ url('admin') }}/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
@endpush
@push('javascript')
<script src="{{ url('admin') }}/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="{{ url('admin') }}/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
@endpush
@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Tambah Data Jenis Pengobatan</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('kesehatan') }}">Pelayanan Kesehatan</a></li>
        <li><a href="{{ url('kesehatan/pengobatan') }}">Jenis Pengobatan</a></li>
        <li class="active">Tambah Data</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tambah Data Jenis Pengobatan</h3>
                    </div>
                    <form id="form" action="{{ url('kesehatan/pengobatan') }}" data-toggle="validator" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="kesehatan_id" value="{{ $kesehatan_id }}">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Penyakit</label>
                                        <input name="penyakit" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Obat</label>
                                        <input name="obat" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                      <label class="control-label">Anggaran</label>
                                      <input name="anggaran" type="number" class="form-control" value="{{ isset($model) ? $model->anggaran:null }}" required>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </form>
                    <!--===================================================-->
                    <!--End Block Styled Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
