@extends('layouts.master')
@section('title', 'Penilaian Premis')
@section('content')
@include('include.error')

<form action="{{ route('premis.inspection.store', encode($premis->id)) }}" method="post">
    @csrf
    <div class="accordion" id="toggleAccordion">
        <div class="card">
            <div class="card-header" id="head1">
                <section class="mb-0 mt-0">
                    <div role="menu" class="collapsed d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#defaultAccordionOne" aria-expanded="false" aria-controls="defaultAccordionOne">
                        <i data-feather="folder-plus"></i>&nbsp;Daftar Penilaian - Premis: {{ $premis->id }}
                    </div>
                </section>
            </div>

            <div id="defaultAccordionOne" class="collapse show" aria-labelledby="head1" data-bs-parent="#toggleAccordion">

                <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="name">Bil. Tempatan Lelaki</label>
                                    <input type="number" name="bil_tempatan_lelaki" class="form-control" value="{{ old('bil_tempatan_lelaki', 0) }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="name">Bil. Tempatan Perempuan</label>
                                    <input type="number" name="bil_tempatan_perempuan" class="form-control" value="{{ old('bil_tempatan_perempuan', 0) }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label for="name">Bil. Asing Lelaki</label>
                                    <input type="number" name="bil_asing_lelaki" class="form-control" value="{{ old('bil_asing_lelaki', 0) }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
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
                </div>
            </div>
        </div>

        {{-- accordian 2 --}}
        @include('inspection.pemarkahan')
        {{-- tamat accordian 2 --}}
        <br/>
        <div class="card-footer text-end">
            <a href="{{ route('premis.edit', encode($premis->id)) }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>

    function showMarkah(radio, targetId)
    {
        let markah = parseInt(radio.dataset.markah);

        let sectionId = radio.dataset.section;

        let badge = document.getElementById('markah_' + targetId);

        badge.setAttribute('data-current', markah);

        badge.innerHTML = markah + ' markah';

        if (markah > 0) {

            badge.classList.remove('bg-danger', 'bg-secondary');
            badge.classList.add('bg-success');

        } else {

            badge.classList.remove('bg-success', 'bg-secondary');
            badge.classList.add('bg-danger');

        }

        calculateSectionTotal(sectionId);
    }

    function toggleRemark(radio, prefix)
    {
        let demerit = document.getElementById('demerit_' + prefix);
        let catatan = document.getElementById('catatan_' + prefix);

        if (radio.value == '0') {

            demerit.style.display = 'block';
            catatan.style.display = 'block';

        } else {

            demerit.style.display = 'none';
            catatan.style.display = 'none';

            demerit.value = 0;
            catatan.value = '';
        }
    }

    function calculateSectionTotal(sectionId)
    {
        let total = 0;

        document.querySelectorAll('.section-' + sectionId + ' .item-markah')
            .forEach(function(item) {

                total += parseInt(item.dataset.current || 0);

            });

        document.getElementById('section_total_' + sectionId)
            .innerHTML = total;
    }

    

</script>
@endpush