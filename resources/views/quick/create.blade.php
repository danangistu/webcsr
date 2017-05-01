@extends('layouts.default')
@section('title')Create Quick Win @endsection
@push('style')
<link href="{{ url('admin') }}/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
@endpush
@push('javascript')
<script src="{{ url('admin') }}/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="{{ url('admin') }}/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
<script src="{{ url('admin') }}/js/demo/form-wizard.js"></script>

@endpush
@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Tambah Data Quick Win</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('kesehatan') }}">Pelayanan Kesehatan</a></li>
        <li class="active">Tambah Data</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel">

                    <!-- Form wizard with Validation -->
                    <!--===================================================-->
                    <div id="demo-bv-wz">
                        <div class="wz-heading">

                            <!--Progress bar-->
                            <div class="progress progress-sm progress-light-base">
                                <div class="progress-bar progress-bar-primary"></div>
                            </div>

                            <!--Nav-->
                            <ul class="wz-icon-bw wz-nav-off">
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-bv-tab1" title="TW1">
                                        <span class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="wz-icon fa fa-th-list fa-2x"></i>
                                        <i class="wz-icon-done fa fa-check fa-2x"></i>
                                    </span>
                                    </a>
                                </li>
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-bv-tab2" title="TW2">
                                        <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                                        <i class="wz-icon fa fa-calendar fa-2x"></i>
                                        <i class="wz-icon-done fa fa-check fa-2x"></i>
                                    </span>
                                    </a>
                                </li>
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-bv-tab3" title="TW3">
                                        <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="wz-icon fa fa-file-text-o fa-2x"></i>
                                        <i class="wz-icon-done fa fa-check fa-2x"></i>
                                    </span>
                                    </a>
                                </li>
                                <li class="col-xs-3">
                                    <a data-toggle="tab" href="#demo-bv-tab4" title="TW4">
                                        <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
                                        <i class="wz-icon fa fa-picture-o fa-2x"></i>
                                        <i class="wz-icon-done fa fa-check fa-2x"></i>
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!--Form-->
                        <form id="demo-bv-wz-form" action="{{ url('quick-win') }}" method="post" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="panel-body">
                                <div class="tab-content">

                                    <!--First tab-->
                                    <div id="demo-bv-tab1" class="tab-pane">
                                        <div class="form-group"><label class="col-lg-3 control-label"><h1>TW1</h1></label></div>
                                        @include('quick.form1')
                                    </div>
                                    <!--Second tab-->
                                    <div id="demo-bv-tab2" class="tab-pane">
                                        <div class="form-group"><label class="col-lg-3 control-label"><h1>TW2</h1></label></div>
                                        @include('quick.form2')
                                    </div>
                                    <!--Third tab-->
                                    <div id="demo-bv-tab3" class="tab-pane">
                                        <div class="form-group"><label class="col-lg-3 control-label"><h1>TW3</h1></label></div>
                                        @include('quick.form3')
                                    </div>
                                    <!--Fourth tab-->
                                    <div id="demo-bv-tab4" class="tab-pane">
                                        <div class="form-group"><label class="col-lg-3 control-label"><h1>TW4</h1></label></div>
                                        @include('quick.form4')
                                    </div>

                                </div>
                            </div>

                            <!--Footer button-->
                            <div class="panel-footer text-right">
                                <div class="box-inline">
                                    <button type="button" class="previous btn btn-primary">Previous</button>
                                    <button type="button" class="next btn btn-primary">Next</button>
                                    <button type="submit" class="finish btn btn-success">Finish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--===================================================-->
                    <!-- End Form wizard with Validation -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
