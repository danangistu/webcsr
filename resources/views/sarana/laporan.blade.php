@extends('layouts.default')
@section('title')Laporan Sarana dan Prasaran @endsection
@section('content')
<?php $path = 'sarana' ?>
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Sarana dan Prasarana</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('sarana') }}">Sarana dan Prasarana</a></li>
        <li class="active">Laporan Data</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div clas="col-lg-12">
          <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="20"></textarea>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
@push('javascript')
<script src="//cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>
<script type="javascript">
  CKEDITOR.replace( 'editor1' );
</script>
@endpush
