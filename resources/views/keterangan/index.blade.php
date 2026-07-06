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
                                <input type="time" name="masa_mula" class="form-control" value="{{ $inspection->masa_mula }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Masa Tamat (Auto)</label>
                                <input type="time" name="" class="form-control" value="{{ $inspection->masa_tamat }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Tempatan Lelaki</label>
                                <input type="number" name="bil_tempatan_lelaki" class="form-control" value="{{ $inspection->bil_tempatan_lelaki }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Tempatan Perempuan</label>
                                <input type="number" name="bil_tempatan_perempuan" class="form-control" value="{{ $inspection->bil_tempatan_perempuan }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Asing Lelaki</label>
                                <input type="number" name="bil_asing_lelaki" class="form-control" value="{{ $inspection->bil_asing_lelaki }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Bil. Asing Perempuan</label>
                                <input type="number" name="bil_asing_perempuan" class="form-control" value="{{ $inspection->bil_asing_perempuan }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Kursus Kendali Makanan</label>
                                <input type="number" name="kursus_kendalimakanan" class="form-control" value="{{ $inspection->kursus_kendalimakanan }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Suntikan Tifoid</label>
                                <input type="number" name="suntikan_tifoid" class="form-control" value="{{ $inspection->suntikan_tifoid }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label>Status GT</label>
                                <input type="text" name="status_gt" class="form-control" value="{{ $inspection->status_gt }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label>Surat Amaran</label>
                                <input type="text" name="surat_amaran" class="form-control" value="{{ $inspection->surat_amaran }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">No Kompaun</label>
                                <input type="text" name="no_kompaun" class="form-control" value="{{ $inspection->no_kompaun }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Nilai Kompaun</label>
                                <input type="number" name="nilai_kompaun" class="form-control" value="{{ $inspection->nilai_kompaun }}" readonly>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Tarikh Periksa (Auto)</label>
                                <input type="date" name="" class="form-control" value="{{ $inspection->tarikh_periksa }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="name">Tarikh Tamat</label>
                                <input type="date" name="tarikh_tamat" class="form-control" value="{{ $inspection->tarikh_tamat }}" readonly>
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
        <a href="{{ route('premis.edit', encode($inspection->premis_id)) }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection