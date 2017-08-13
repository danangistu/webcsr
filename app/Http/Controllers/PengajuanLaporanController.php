<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Models\PengajuanLaporan;

class PengajuanLaporanController extends AdminController
{
  public function __construct(PengajuanLaporan $model)
  {
      $this->middleware('auth');
      $this->model = $model;
      $this->view = 'pengajuan-laporan.';
  }
  public function index()
  {
      return view($this->view.'index',[
          'models'=>$this->model->orderBy('created_at','desc')->where('user_id',auth()->user()->id)->get(),
      ]);
  }
}
