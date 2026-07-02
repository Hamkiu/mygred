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
                <input type="text" name="name" class="form-control" value="{{ date('d/m/Y', strtotime($inspection->tarikh_periksa)) }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Tarikh Tamat</label>
                <input type="text" name="name" class="form-control" value="{{ date('d/m/Y', strtotime($inspection->tarikh_tamat)) }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Masa Mula</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->masa_mula }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Masa Tamat</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->masa_tamat }}" readonly>
            </div>
        </div>
   </div>
   <div class="row">
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Tempatan Lelaki</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_tempatan_lelaki }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Tempatan Perempuan</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_tempatan_perempuan }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Asing Lelaki</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_asing_lelaki }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Bil Asing Perempuan</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->bil_asing_perempuan }}" readonly>
            </div>
        </div>
   </div>
   <div class="row">
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Kursus Kendali Makanan</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->kursus_kendalimakanan }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Suntikan Tifoid</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->suntikan_tifoid }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Status GT</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->status_gt ? 'Ya' : 'Tidak' }}" readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mb-2">
                <label for="name">Surat Amaran</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->surat_amaran ? 'Ya' : 'Tidak' }}" readonly>
            </div>
        </div>
   </div>
   <hr style="border: 2px solid black;">
   <div class="row">
        <div class="col-md-2">
            <div class="form-group mb-2">
                <label for="name">No Kompaun</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->no_kompaun ?: 'Tiada' }}" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group mb-2">
                <label for="name">Nilai Kompaun</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->nilai_kompaun ?: 'Tiada' }}" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group mb-2">
                <label for="name">No Sijil</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->no_sijil ?: 'Tiada' }}" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group mb-2">
                <label for="name">Markah</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->markah ?: 'Tiada' }}" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group mb-2">
                <label for="name">Gred</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->gred ?: 'Tiada' }}" readonly>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group mb-2">
                <label for="name">Status CCP</label>
                <input type="text" name="name" class="form-control" value="{{ $inspection->status_ccp ? 'Ya' : 'Tidak' }}" readonly>
            </div>
        </div>
   </div>
   <div class="row">
    <div class="col-md-3">
        <div class="form-group mb-2">
            <label for="name">Tandas</label>
            <input type="text" name="name" class="form-control" value="{{ $inspection->tandas ? 'Ya' : 'Tidak' }}" readonly>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group mb-2">
            <label for="name">Star Tandas</label>
            <input type="text" name="name" class="form-control" value="{{ $inspection->jumlah_star ?: 'Tiada' }}" readonly>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-2">
            <label for="name">Catatan</label>
            <textarea name="name" class="form-control" readonly>{{ $inspection->catatan ?: 'Tiada' }}</textarea>
        </div>
    </div>
   </div>
</div>
<div class="modal-footer">
    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Tutup</button>
    <a href="{{ route('premis.inspection.keterangan', encode($inspection->id)) }}"
        class="btn btn-primary">
         Keterangan
     </a>
</div>