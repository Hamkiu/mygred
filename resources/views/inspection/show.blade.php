<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Nombor Inspection: {{ $inspection->id }}</h5>
    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close">
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
</div>
<div class="modal-body">
   <div class="row">
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Tarikh Periksa</label>
                <input type="text" name="name" class="form-control" value="{{ date('d/m/Y', strtotime($inspection->tarikh_periksa)) }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Tarikh Tamat</label>
                <input type="text" name="name" class="form-control" value="{{ date('d/m/Y', strtotime($inspection->tarikh_tamat)) }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Masa Mula</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->masa_mula }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Masa Tamat</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->masa_tamat }}">
            </div>
        </div>
   </div>
   <div class="row">
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Tempatan Lelaki</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_tempatan_lelaki }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Tempatan Perempuan</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_tempatan_perempuan }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Asing Lelaki</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_asing_lelaki }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Asing Perempuan</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_asing_perempuan }}">
            </div>
        </div>
   </div>
</div>
<div class="modal-footer">
    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
    <button type="button" class="btn btn-primary">Save</button>
</div>