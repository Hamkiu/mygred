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

        if (catatan.value.trim() === '') {
            catatan.value = 'Tiada';
        }

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