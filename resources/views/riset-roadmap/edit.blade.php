@extends('layouts.default')
@section('title')Edit Roadmap @endsection
@push('style')
<link href="{{ url('admin') }}/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
<link href="{{ url('admin') }}/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="{{ url('admin') }}/plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
@endpush
@push('javascript')
<script src="{{ url('admin') }}/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="{{ url('admin') }}/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
<script src="{{ url('admin') }}/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="{{ url('admin') }}/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script>
    $('#demo-dp-component .input-group.date').datepicker({autoclose:true});
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
      reader.readAsDataURL(event.target.files[0]);
    };
</script>
@endpush
@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Edit Data Roadmap</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('riset') }}">Riset dan Pengembangan</a></li>
        <li><a href="{{ url('riset/roadmap') }}">Roadmap</a></li>
        <li class="active">Edit Data</li>
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
                        <h3 class="panel-title">Edit Data Roadmap</h3>
                    </div>
                    <form id="form" action="{{ url('riset/roadmap/edit/'.$model->id) }}" data-toggle="validator" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="riset_id" value="{{ $model->riset_id }}">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input class="form-control" type="text" name="title" value="{{ $model->title }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="description" rows="3" required>{{ $model->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Foto</label></br>
                                        <img src="{{ url('contents/riset/foto/'.$model->foto) }}" id="output" height="200"/>
                                        <input class="form-control" accept="image/*" type="file" name="foto" onchange="loadFile(event)">
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
