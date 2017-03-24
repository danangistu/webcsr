<?php $bulans = ['jan','feb','mar','apr','mei','jun','jul','agu','sep','okt','nov','des'] ?>
<div id="demo-bv-tab2" class="tab-pane fade">
    <div class="form-group">
        <label class="col-lg-3 control-label"><h2>Timeline</h2></label>
    </div>
    @foreach($bulans as $bulan)
        <div class="form-group">
            <label class="col-lg-3 control-label">{{ ucwords($bulan) }}</label>
            <div class="col-lg-7">
                <textarea class="form-control" name="{{ $bulan }}" rows="2">{{ isset($timeline->$bulan) ? $timeline->$bulan:null }}</textarea>
            </div>
        </div>
    @endforeach
</div>
