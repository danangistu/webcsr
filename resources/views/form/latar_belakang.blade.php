<div id="demo-bv-tab4" class="tab-pane">
    <div class="form-group">
        <label class="col-lg-3 control-label">Latar Belakang Kegiatan</label>
        <div class="col-lg-7">
            <textarea class="form-control" name="latar_belakang">{{ isset($latar->latar_belakang) ? $latar->latar_belakang:null }}</textarea>
        </div>
    </div>
    <?php for($i=1; $i<7; $i++){  $foto = 'foto_'.$i;?>
    <div class="form-group">
        <label class="col-lg-3 control-label">Dokumentasi {{ $i }}</label>
        <div class="col-lg-7">
             <input class="form-control" accept="image/*" type="file" name="foto_{{ $i }}" onchange="loadFile{{$i}}(event)">
        </div>
        <label class="col-lg-3 control-label">&nbsp </label>
        @if(isset($latar->$foto))
            <div class="col-lg-9"><img id="output{{$i}}" src="{{ asset('contents/'.$path.'/foto/'.$latar->$foto) }}" alt="{{ $latar->$foto }}" height="200"/></div>
        @else
            <div class="col-lg-9"><img id="output{{$i}}" height="200"/></div>
        @endif
    </div>
    <?php } ?>
</div>
@push('javascript')
<script>
    var loadFile1 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output1');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile2 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output2');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile3 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output3');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile4 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output4');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile5 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output5');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile6 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output6');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
</script>
@endpush
