@extends('layouts.default')
@section('title')Pengajuan Laporan @endsection
@section('content')
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!-- <div id="page-title">
        <h1 class="page-header text-overflow">Sarana dan Prasarana</h1>
    </div> -->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!-- <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('sarana') }}">Sarana dan Prasarana</a></li>
        <li class="active">Laporan Data</li>
    </ol> -->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
      <div class="panel">
          <form action="" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
          <input type="hidden" name="csr_id" value="{{ $model->id }}">
          <input type="hidden" name="type" value="komunikasi">
          <div class="panel-body">
            <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-check"></span> Ajukan Laporan</button>
            <div class="form-group">
                <div class="col-lg-6">
                  <label class="control-label">Judul Laporan</label>
                  <input class="form-control" type="text" name="judul_laporan" required>
                </div>
            </div>
          </div>
          <div clas="panel-body">
              <textarea class="ckeditor" name="laporan" id="editor" name="editor">
                <table width="100%" border="0">
                  <tr>
                    <th rowspan="2"><img src="{{ asset('contents/'.$lapset->left_logo) }}" width="100" height="50"></th>
                    <th>{{ $lapset->header1 }}</th>
                    <th rowspan="2"><img src="{{ asset('contents/'.$lapset->right_logo) }}" width="100" height="50"></th>
                  </tr>
                  <tr>
                    <th style="background-color:#ecf0f1">{{ $lapset->header2 }}</th>
                  </tr>
                  <tr>
                    <th colspan="3" text-align="center">
                      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                      <h1>{{ strtoupper('Judul Laporan') }}</h1>
                      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                      <h1>{{ strtoupper($lapset->footer) }}</h1>
                      <br/><br/><br/><br/>
                    </td>
                  </th>
                </table>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>1. LATAR BELAKANG</h2>
                {!! $latar->latar_belakang !!}<br/>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>2. MAKSUD DAN TUJUAN</h2>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>3. JADWAL RENCANA PELAKSANAAN</h2>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>4. ANGGARAN TERSEDIA</h2>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>5. PELAKSANAAN KEGIATAN</h2>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>6. MANFAAT</h2>
                {!! $evaluasi->manfaat !!}<br/>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>7. RENCANA ANGGARAN BIAYA</h2>
                <table width="100%" border="1">
                  <tr>
                    <th>No.</th>
                    <th>Uraian</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Harga Satuan (Rp)</th>
                    <th>Jumlah</th>
                  <tr>
                  <tr>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                  </tr>
                  <tr>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> &nbsp </td>
                    <td> Total </td>
                    <td> <b>{{ 'Rp. '.number_format($model->anggaran,2,',','.') }}</b> </td>
                  </tr>
                </table>
                <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                <br/><h2>8. RINGKASAN</h2>
                {!! $evaluasi->ringkasan !!}<br/>
              </textarea>
          </div>
          </form>
      </div>
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
@endsection
@push('javascript')
<script src="{{ url('admin/plugins/ckeditor') }}/ckeditor.js"></script>
<script type="javascript">
  CKEDITOR.replace( 'editor' );
</script>
@endpush
