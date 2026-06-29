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
        @include('inspection.pemarkahan')
        {{-- tamat accordian 2 --}}
        <br/>
        <div class="card-footer text-end">
            <a href="{{ route('premis.edit', encode($premis->id)) }}" class="btn btn-secondary">Kembali</a>
            <button
                type="button"
                class="btn btn-primary review" onclick="validateForm()">

                Review Penilaian

            </button>
        </div>
    </div>
    <div class="modal fade" id="reviewModal" tabindex="-1">

        <div class="modal-dialog modal-xl">
    
            <div class="modal-content">
    
                <div class="modal-header">
    
                    <h5 class="modal-title">
                        Semakan Penilaian Premis
                    </h5>
    
                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>
    
                </div>
    
                <div class="modal-body">
    
                    <div id="reviewSectionSummary"></div>
    
                    <hr>
    
                    <table class="table table-bordered">
    
                        <tbody>
    
                            <tr>
                                <th width="30%">
                                    Jumlah Markah
                                </th>
                                <td id="review_markah">
                                    0
                                </td>
                            </tr>
    
                            <tr>
                                <th>
                                    Jumlah Demerit
                                </th>
                                <td id="review_demerit">
                                    0
                                </td>
                            </tr>
    
                            <tr>
                                <th>
                                    Skor Keseluruhan
                                </th>
                                <td id="review_skor">
                                    0 / 0
                                </td>
                            </tr>
    
                            <tr>
                                <th>
                                    Gred Akhir
                                </th>
                                <td id="review_gred">
                                    -
                                </td>
                            </tr>
    
                        </tbody>
    
                    </table>
    
                </div>
    
                <div class="modal-footer">
    
                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
    
                        Kembali
    
                    </button>
    
                    <button type="submit"
                            class="btn btn-success">
    
                        Sahkan & Simpan
    
                    </button>
    
                </div>
    
            </div>
    
        </div>
    
    </div>
</form>
@endsection

@push('scripts')
<script>

    function showMarkah(radio, targetId)
    {
        let markahAsal = parseInt(radio.dataset.markah);
        let sectionId = radio.dataset.section;

        let markah = 0;
        let demerit = 0;

        if (radio.value == '1') {

            markah = markahAsal;
            demerit = 0;

        } else {

            markah = 0;
            demerit = markahAsal;

        }

        // MARKAH
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

        // DEMERIT
        let demeritBadge = document.getElementById('demerit_' + targetId);

        if (demeritBadge) {

            demeritBadge.innerHTML = demerit + ' markah';
            demeritBadge.setAttribute('data-current', demerit);

        }

        let hiddenDemerit = document.getElementById('hidden_demerit_' + targetId);

        if (hiddenDemerit) {

            hiddenDemerit.value = demerit;

        }

        calculateSectionTotal(sectionId);
    }

    function toggleRemark(radio, prefix)
    {
        let catatan = document.getElementById('catatan_' + prefix);

        if (radio.value == '0') {

            catatan.style.display = 'block';

        } else {

            catatan.style.display = 'none';
            catatan.value = '';

        }
    }

    function calculateSectionTotal(sectionId)
    {
        let totalMarkah = 0;
        let totalDemerit = 0;

        document
            .querySelectorAll('.section-' + sectionId + ' .item-markah')
            .forEach(function(el){

                totalMarkah += parseInt(el.dataset.current || 0);

            });

        document
            .querySelectorAll('.section-' + sectionId + ' .item-demerit')
            .forEach(function(el){

                totalDemerit += parseInt(el.dataset.current || 0);

            });

        let skor = totalMarkah + totalDemerit;

        document.getElementById(
            'section_markah_' + sectionId
        ).innerHTML = totalMarkah;

        document.getElementById(
            'section_demerit_' + sectionId
        ).innerHTML = totalDemerit;

        document.getElementById(
            'section_skor_' + sectionId
        ).innerHTML = skor;
    }

    function calculateGrade(skor)
    {
        if (skor >= 86)
            return 'A';

        if (skor >= 71)
            return 'B';

        if (skor >= 51)
            return 'C';

        return 'D';
    }

    function showReviewModal()
    {
        
        let totalMarkah = 0;
        let totalDemerit = 0;

        let html = '';

        $('.section-card').each(function(){
            

            let sectionId = $(this).data('section-id');
            

            let nama = $(this).find('.section-title').text().trim();

            let markah = parseInt(
                $('#section_markah_' + sectionId).text()
            ) || 0;

            let demerit = parseInt(
                $('#section_demerit_' + sectionId).text()
            ) || 0;

            let skor = parseInt(
                $('#section_skor_' + sectionId).text()
            ) || 0;

            let maksimum = parseInt(
                $('#section_max_' + sectionId).val()
            ) || 0;

            totalMarkah += markah;
            totalDemerit += demerit;

            html += `
            <div class="card shadow-sm mb-2">

                <div class="card-body">

                    <h6 class="mb-3">
                        ${nama}
                    </h6>

                    <div class="row text-center">

                        <div class="col-6">
                            <div class="text-success fw-bold fs-5">
                                ${markah}/${maksimum}
                            </div>
                            <small>Markah</small>
                        </div>

                        <div class="col-6">
                            <div class="text-danger fw-bold fs-5">
                                ${demerit}
                            </div>
                            <small>Demerit</small>
                        </div>

                    </div>

                </div>

            </div>
            `;
        });

        $('#reviewSectionSummary').html(html);

        let skorAkhir = 100 - totalDemerit;

        $('#review_markah').html(totalMarkah);

        $('#review_demerit').html(totalDemerit);

        $('#review_skor').html(
            skorAkhir + ' / 100'
        );

        $('#review_gred').html(
            calculateGrade(skorAkhir)
        );

        $('#reviewModal').modal('show');
    }

    function validateForm()
    {
        let belumJawab = false;

        $('tr[class^="section-"]').each(function () {

            let radios = $(this).find('input[type="radio"]');

            // Skip jika tiada radio
            if (radios.length === 0) {
                return;
            }

            let name = radios.first().attr('name');

            if ($('input[name="' + name + '"]:checked').length === 0) {

                belumJawab = true;

                // Scroll ke item yang belum dijawab
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 120
                }, 500);

                $(this).addClass('table-danger');

                return false; // break each()
            }

        });

        if (belumJawab) {

            Swal.fire({
                icon: 'warning',
                title: 'Penilaian Belum Lengkap',
                text: 'Sila jawab semua item sebelum membuat semakan.',
                confirmButtonText: 'OK'
            });

            return;
        }

        // Buang highlight lama
        $('.table-danger').removeClass('table-danger');

        showReviewModal();
    }

</script>
@endpush