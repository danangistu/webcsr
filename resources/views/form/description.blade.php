<div id="demo-bv-tab1" class="tab-pane">
    <div class="form-group">
        <label class="col-lg-3 control-label">Tempat</label>
        <div class="col-lg-4">
            <input type="text" name="tempat" class="form-control" value="{{ isset($model->tempat) ? $model->tempat:null }}" placeholder="Tempat">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Latar Belakang Kegiatan</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="kerjasama">{{ isset($model->kerjasama) ? $model->kerjasama:null }}</textarea>
        </div>
    </div>
</div>
