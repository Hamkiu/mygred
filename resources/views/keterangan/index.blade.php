@extends('layouts.master')
@section('title', 'Keterangan Inspection')
@section('content')
@include('include.error')
<div class="accordion" id="toggleAccordion">
    <div class="card">
        <div class="card-header" id="head1">
            <section class="mb-0 mt-0">
                <div role="menu" class="collapsed d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#defaultAccordionOne" aria-expanded="false" aria-controls="defaultAccordionOne">
                    <i data-feather="folder-plus"></i>&nbsp;Daftar Penilaian - Premis: 
                </div>
            </section>
        </div>

        <div id="defaultAccordionOne" class="collapse show" aria-labelledby="head1" data-bs-parent="#toggleAccordion">

            <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Masa Mula</label>
                                <input type="time" name="masa_mula" class="form-control" value="{{ old('masa_mula', '00:00') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Masa Tamat (Auto)</label>
                                <input type="time" name="" class="form-control" value="{{ old('masa_tamat', '00:00') }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Tempatan Lelaki</label>
                                <input type="number" name="bil_tempatan_lelaki" class="form-control" value="{{ old('bil_tempatan_lelaki', 0) }}" min="0">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Tempatan Perempuan</label>
                                <input type="number" name="bil_tempatan_perempuan" class="form-control" value="{{ old('bil_tempatan_perempuan', 0) }}" min="0">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Asing Lelaki</label>
                                <input type="number" name="bil_asing_lelaki" class="form-control" value="{{ old('bil_asing_lelaki', 0) }}" min="0">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Asing Perempuan</label>
                                <input type="number" name="bil_asing_perempuan" class="form-control" value="{{ old('bil_asing_perempuan', 0) }}" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Kursus Kendali Makanan</label>
                                <input type="number" name="kursus_kendalimakanan" class="form-control" value="{{ old('kursus_kendalimakanan', 0) }}" min="0">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Suntikan Tifoid</label>
                                <input type="number" name="suntikan_tifoid" class="form-control" value="{{ old('suntikan_tifoid', 0) }}" min="0">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label>Status GT</label>
                        
                                <select name="status_gt" class="form-control">
                        
                                    <option value="0"
                                        {{ old('status_gt', 0) == 0 ? 'selected' : '' }}>
                                        Tiada
                                    </option>
                        
                                    <option value="1"
                                        {{ old('status_gt') == 1 ? 'selected' : '' }}>
                                        Ada
                                    </option>
                        
                                </select>
                        
                                <small class="form-text text-muted">
                                    Sila pilih status GT.
                                </small>
                        
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label>Surat Amaran</label>
                        
                                <select name="surat_amaran" class="form-control">
                        
                                    <option value="0">Tiada</option>
                                    <option value="1">Ada</option>
                        
                                </select>
                        
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">No Kompaun</label>
                                <input type="text" name="no_kompaun" class="form-control" value="{{ old('no_kompaun', 'Tiada') }}">
                                <small id="sh-text3" class="form-text text-muted">Sila masukkan no kompaun jika ada.</small>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Nilai Kompaun</label>
                                <input type="number" name="nilai_kompaun" class="form-control" value="{{ old('nilai_kompaun', 0) }}" min="0" step="0.01">
                                <small id="sh-text4" class="form-text text-muted">Sila masukkan nilai kompaun jika ada.</small>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Tarikh Periksa (Auto)</label>
                                <input type="date" name="" class="form-control" value="{{ old('tarikh_periksa', now()->format('Y-m-d')) }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Tarikh Tamat</label>
                                <input type="date" name="tarikh_tamat" class="form-control" value="{{ old('tarikh_tamat', now()->format('Y-m-d')) }}">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    {{-- accordian 2 --}}
    {{-- @include('inspection.pemarkahan') --}}
    {{-- tamat accordian 2 --}}
    <br/>
    <div class="card-footer text-end">
        {{-- <a href="{{ route('premis.edit', encode($premis->id)) }}" class="btn btn-secondary">Kembali</a> --}}
        <button
            type="button"
            class="btn btn-primary review" onclick="validateForm()">

            Review Penilaian

        </button>
    </div>
</div>
@endsection