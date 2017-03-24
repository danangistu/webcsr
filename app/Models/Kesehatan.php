<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    protected $fillable = ['timeline_id','latar_belakang_id','evaluasi_id','tempat','kerjasama','doc_kerjasama','doc_anggaran','doc_resiko','doc_tor','doc_laporan','doc_evaluasi'];
}
