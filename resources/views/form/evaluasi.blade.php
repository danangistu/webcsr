<div id="demo-bv-tab5" class="tab-pane">
    <div class="form-group">
        <label class="col-lg-3 control-label">Laporan Kegiatan Pemberdayaan Masyarakat</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="laporan">{{ isset($evaluasi->laporan) ? $evaluasi->laporan:null }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Ringkasan Kegiatan</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="ringkasan">{{ isset($evaluasi->ringkasan) ? $evaluasi->ringkasan:null }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Manfaat Bantuan</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="manfaat">{{ isset($evaluasi->manfaat) ? $evaluasi->manfaat:null }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Tanggapan Pejabat (Internal)</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="tangg_int">{{ isset($evaluasi->tangg_int) ? $evaluasi->tangg_int:null }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Tanggapan Pejabat (External)</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="tangg_ext">{{ isset($evaluasi->tangg_ext) ? $evaluasi->tangg_ext:null }}</textarea>
        </div>
    </div>
</div>
