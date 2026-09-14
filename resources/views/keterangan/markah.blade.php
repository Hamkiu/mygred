{{-- ============================================================
    KEPUTUSAN PEMARKAHAN
============================================================ --}}

@php

    /*
    |--------------------------------------------------------------------------
    | Ringkasan Keseluruhan
    |--------------------------------------------------------------------------
    */

    $jumlahMarkahKeseluruhan = 0;
    $jumlahDemeritKeseluruhan = 0;
    $jumlahMarkahMaksimum = 0;

    $jumlahPatuh = 0;
    $jumlahTidakPatuh = 0;

    foreach ($sections as $section) {
        foreach ($section->components as $component) {
            /*
            |--------------------------------------------------------------------------
            | Component mempunyai Item
            |--------------------------------------------------------------------------
            */

            if ($component->has_items) {
                foreach ($component->items as $item) {
                    $jumlahMarkahMaksimum += (float) $item->markah;

                    $key = 'item_' . $item->id;

                    $answer = $answers[$key] ?? null;

                    if ($answer) {
                        $jumlahMarkahKeseluruhan += (float) ($answer->markah_diperolehi ?? 0);

                        $jumlahDemeritKeseluruhan += (float) ($answer->demerit ?? 0);

                        if ((int) $answer->is_patuh === 1) {
                            $jumlahPatuh++;
                        } else {
                            $jumlahTidakPatuh++;
                        }
                    }
                }

                /*
            |--------------------------------------------------------------------------
            | Component tiada Item
            |--------------------------------------------------------------------------
            */
            } else {
                $jumlahMarkahMaksimum += (float) $component->markah;

                $key = 'component_' . $component->id;

                $answer = $answers[$key] ?? null;

                if ($answer) {
                    $jumlahMarkahKeseluruhan += (float) ($answer->markah_diperolehi ?? 0);

                    $jumlahDemeritKeseluruhan += (float) ($answer->demerit ?? 0);

                    if ((int) $answer->is_patuh === 1) {
                        $jumlahPatuh++;
                    } else {
                        $jumlahTidakPatuh++;
                    }
                }
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Skor Keseluruhan
    |--------------------------------------------------------------------------
    */

    $skorKeseluruhan = $jumlahMarkahMaksimum > 0 ? ($jumlahMarkahKeseluruhan / $jumlahMarkahMaksimum) * 100 : 0;
@endphp



<div class="card mt-2">

    {{-- ============================================================
        HEADER ACCORDION
    ============================================================ --}}

    <div class="card-header" id="head2">

        <section class="mb-0 mt-0">

            <div role="menu" class="collapsed d-flex justify-content-center align-items-center"
                data-bs-toggle="collapse" data-bs-target="#defaultAccordionTwo" aria-expanded="false"
                aria-controls="defaultAccordionTwo">

                <i data-feather="check-circle"></i>

                &nbsp;Keputusan Pemarkahan

            </div>

        </section>

    </div>



    <div id="defaultAccordionTwo" class="collapse" aria-labelledby="head2" data-bs-parent="#toggleAccordion">

        <div class="card-body">


            {{-- ============================================================
                RINGKASAN KEPUTUSAN
            ============================================================ --}}

            <div class="card mb-4 border border-dark">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <h5 class="mb-1">
                                Ringkasan Keputusan
                            </h5>

                            <small class="text-muted">
                                Ringkasan keseluruhan hasil penilaian premis
                            </small>

                        </div>


                        <span class="badge bg-success fs-6">
                            SELESAI
                        </span>

                    </div>



                    <div class="row g-3 text-center">


                        {{-- =================================================
                            MARKAH
                        ================================================= --}}

                        <div class="col-md-3">

                            <div class="border border-dark rounded p-3 h-100">

                                <small class="text-muted d-block mb-2">
                                    MARKAH
                                </small>

                                <h3 class="mb-0 text-success">

                                    {{ number_format($jumlahMarkahKeseluruhan, 2) }}

                                </h3>

                                <small class="text-muted">

                                    daripada

                                    {{ number_format($jumlahMarkahMaksimum, 2) }}

                                </small>

                            </div>

                        </div>



                        {{-- =================================================
                            DEMERIT
                        ================================================= --}}

                        <div class="col-md-3">

                            <div class="border border-dark rounded p-3 h-100">

                                <small class="text-muted d-block mb-2">
                                    DEMERIT
                                </small>

                                <h3 class="mb-0 text-danger">

                                    {{ number_format($jumlahDemeritKeseluruhan, 2) }}

                                </h3>

                                <small class="text-muted">
                                    jumlah demerit
                                </small>

                            </div>

                        </div>



                        {{-- =================================================
                            SKOR
                        ================================================= --}}

                        <div class="col-md-3">

                            <div class="border border-dark rounded p-3 h-100">

                                <small class="text-muted d-block mb-2">
                                    SKOR
                                </small>

                                <h3 class="mb-0 text-primary">

                                    {{ number_format($skorKeseluruhan, 2) }}%

                                </h3>

                                <small class="text-muted">
                                    keseluruhan
                                </small>

                            </div>

                        </div>



                        {{-- =================================================
                            PEMATUHAN
                        ================================================= --}}

                        <div class="col-md-3">

                            <div class="border border-dark rounded p-3 h-100">

                                <small class="text-muted d-block mb-2">
                                    PEMATUHAN
                                </small>


                                <div class="mb-1">

                                    <span class="badge bg-success">

                                        {{ $jumlahPatuh }}
                                        Patuh

                                    </span>

                                </div>


                                <div>

                                    <span class="badge bg-danger">

                                        {{ $jumlahTidakPatuh }}
                                        Tidak Patuh

                                    </span>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>



            {{-- ============================================================
                SENARAI SECTION
            ============================================================ --}}

            @foreach ($sections as $section)
                @php

                    /*
                    |--------------------------------------------------------------------------
                    | Kiraan Section
                    |--------------------------------------------------------------------------
                    */

                    $sectionMarkah = 0;

                    $sectionDemerit = 0;

                    $sectionMaximum = 0;

                    $sectionPatuh = 0;

                    $sectionTidakPatuh = 0;

                    foreach ($section->components as $component) {
                        /*
                        |--------------------------------------------------------------------------
                        | Component mempunyai Item
                        |--------------------------------------------------------------------------
                        */

                        if ($component->has_items) {
                            foreach ($component->items as $item) {
                                $sectionMaximum += (float) $item->markah;

                                $key = 'item_' . $item->id;

                                $answer = $answers[$key] ?? null;

                                if ($answer) {
                                    $sectionMarkah += (float) ($answer->markah_diperolehi ?? 0);

                                    $sectionDemerit += (float) ($answer->demerit ?? 0);

                                    if ((int) $answer->is_patuh === 1) {
                                        $sectionPatuh++;
                                    } else {
                                        $sectionTidakPatuh++;
                                    }
                                }
                            }

                            /*
                        |--------------------------------------------------------------------------
                        | Component tiada Item
                        |--------------------------------------------------------------------------
                        */
                        } else {
                            $sectionMaximum += (float) $component->markah;

                            $key = 'component_' . $component->id;

                            $answer = $answers[$key] ?? null;

                            if ($answer) {
                                $sectionMarkah += (float) ($answer->markah_diperolehi ?? 0);

                                $sectionDemerit += (float) ($answer->demerit ?? 0);

                                if ((int) $answer->is_patuh === 1) {
                                    $sectionPatuh++;
                                } else {
                                    $sectionTidakPatuh++;
                                }
                            }
                        }
                    }

                    /*
                    |--------------------------------------------------------------------------
                    | Peratus Section
                    |--------------------------------------------------------------------------
                    */

                    $sectionSkor = $sectionMaximum > 0 ? ($sectionMarkah / $sectionMaximum) * 100 : 0;
                @endphp



                <div class="card mb-4">


                    {{-- ====================================================
                        HEADER SECTION
                    ==================================================== --}}

                    <div class="card-header">


                        <div class="row align-items-center">


                            <div class="col-md-6">


                                <strong class="fs-6">

                                    {{ $section->code }}

                                    -

                                    {{ $section->perkara }}

                                </strong>



                                <div class="mt-2">


                                    <span class="badge bg-success me-1">

                                        {{ $sectionPatuh }}
                                        Patuh

                                    </span>


                                    <span class="badge bg-danger">

                                        {{ $sectionTidakPatuh }}
                                        Tidak Patuh

                                    </span>


                                </div>


                            </div>



                            <div class="col-md-6">


                                <div
                                    class="
                                    d-flex
                                    justify-content-md-end
                                    gap-2
                                    mt-3
                                    mt-md-0
                                    flex-wrap
                                ">


                                    <span class="badge bg-success fs-6">

                                        Markah :

                                        {{ number_format($sectionMarkah, 2) }}

                                    </span>



                                    <span class="badge bg-danger fs-6">

                                        Demerit :

                                        {{ number_format($sectionDemerit, 2) }}

                                    </span>



                                    <span class="badge bg-primary fs-6">

                                        Skor :

                                        {{ number_format($sectionMarkah, 2) }}

                                        /

                                        {{ number_format($sectionMaximum, 2) }}

                                    </span>



                                    <span class="badge bg-dark fs-6">

                                        {{ number_format($sectionSkor, 2) }}%

                                    </span>


                                </div>


                            </div>


                        </div>


                    </div>



                    {{-- ====================================================
                        TABLE
                    ==================================================== --}}

                    <div class="card-body p-0">


                        <div class="table-responsive">


                            <table
                                class="
                                table
                                table-bordered
                                table-hover
                                mb-0
                            ">


                                <thead class="table-light">


                                    <tr
                                        class="
                                        text-center
                                        align-middle
                                    ">


                                        <th width="40%">
                                            Perkara
                                        </th>


                                        <th width="15%">
                                            Keputusan
                                        </th>


                                        <th width="10%">
                                            Markah
                                        </th>


                                        <th width="10%">
                                            Demerit
                                        </th>


                                        <th width="25%">
                                            Catatan
                                        </th>


                                    </tr>


                                </thead>



                                <tbody>


                                    @foreach ($section->components as $component)
                                        {{-- =================================
                                            COMPONENT ADA ITEM
                                        ================================= --}}

                                        @if ($component->has_items)
                                            <tr class="table-primary">


                                                <td colspan="5">


                                                    <strong>

                                                        {{ $component->code }}

                                                        -

                                                        {{ $component->name }}

                                                    </strong>


                                                </td>


                                            </tr>



                                            @foreach ($component->items as $item)
                                                @php

                                                    $key = 'item_' . $item->id;

                                                    $answer = $answers[$key] ?? null;

                                                @endphp



                                                <tr class="align-middle">


                                                    {{-- PERKARA --}}

                                                    <td>

                                                        {!! nl2br(e($item->description)) !!}

                                                    </td>



                                                    {{-- KEPUTUSAN --}}

                                                    <td class="text-center">


                                                        @if ($answer)
                                                            @if ((int) $answer->is_patuh === 1)
                                                                <span
                                                                    class="
                                                                    badge
                                                                    bg-success
                                                                ">

                                                                    PATUH

                                                                </span>
                                                            @else
                                                                <span
                                                                    class="
                                                                    badge
                                                                    bg-danger
                                                                ">

                                                                    TIDAK PATUH

                                                                </span>
                                                            @endif
                                                        @else
                                                            <span
                                                                class="
                                                                badge
                                                                bg-secondary
                                                            ">

                                                                TIADA DATA

                                                            </span>
                                                        @endif


                                                    </td>



                                                    {{-- MARKAH --}}

                                                    <td class="text-center">


                                                        @if ($answer)
                                                            @if ((float) $answer->markah_diperolehi > 0)
                                                                <span
                                                                    class="
                                                                    badge
                                                                    bg-success
                                                                    fs-6
                                                                ">

                                                                    {{ number_format($answer->markah_diperolehi, 2) }}

                                                                </span>
                                                            @else
                                                                <span
                                                                    class="
                                                                    badge
                                                                    bg-light
                                                                    text-dark
                                                                    border
                                                                ">

                                                                    0.00

                                                                </span>
                                                            @endif
                                                        @else
                                                            -
                                                        @endif


                                                    </td>



                                                    {{-- DEMERIT --}}

                                                    <td class="text-center">


                                                        @if ($answer)
                                                            @if ((float) $answer->demerit > 0)
                                                                <span
                                                                    class="
                                                                    badge
                                                                    bg-danger
                                                                    fs-6
                                                                ">

                                                                    {{ number_format($answer->demerit, 2) }}

                                                                </span>
                                                            @else
                                                                <span
                                                                    class="
                                                                    badge
                                                                    bg-light
                                                                    text-dark
                                                                    border
                                                                ">

                                                                    0.00

                                                                </span>
                                                            @endif
                                                        @else
                                                            -
                                                        @endif


                                                    </td>



                                                    {{-- CATATAN --}}

                                                    <td>


                                                        @if ($answer && !empty($answer->catatan) && strtolower(trim($answer->catatan)) !== 'tiada')
                                                            {{ $answer->catatan }}
                                                        @else
                                                            <span
                                                                class="
                                                                text-muted
                                                            ">

                                                                Tiada

                                                            </span>
                                                        @endif


                                                    </td>


                                                </tr>
                                            @endforeach



                                            {{-- =================================
                                            COMPONENT TIADA ITEM
                                        ================================= --}}
                                        @else
                                            @php

                                                $key = 'component_' . $component->id;

                                                $answer = $answers[$key] ?? null;

                                            @endphp



                                            <tr class="align-middle">


                                                {{-- PERKARA --}}

                                                <td>


                                                    <strong>

                                                        {{ $component->code }}

                                                    </strong>


                                                    -


                                                    {{ $component->name }}


                                                </td>



                                                {{-- KEPUTUSAN --}}

                                                <td class="text-center">


                                                    @if ($answer)
                                                        @if ((int) $answer->is_patuh === 1)
                                                            <span
                                                                class="
                                                                badge
                                                                bg-success
                                                            ">

                                                                PATUH

                                                            </span>
                                                        @else
                                                            <span
                                                                class="
                                                                badge
                                                                bg-danger
                                                            ">

                                                                TIDAK PATUH

                                                            </span>
                                                        @endif
                                                    @else
                                                        <span
                                                            class="
                                                            badge
                                                            bg-secondary
                                                        ">

                                                            TIADA DATA

                                                        </span>
                                                    @endif


                                                </td>



                                                {{-- MARKAH --}}

                                                <td class="text-center">


                                                    @if ($answer)
                                                        @if ((float) $answer->markah_diperolehi > 0)
                                                            <span
                                                                class="
                                                                badge
                                                                bg-success
                                                                fs-6
                                                            ">

                                                                {{ number_format($answer->markah_diperolehi, 2) }}

                                                            </span>
                                                        @else
                                                            <span
                                                                class="
                                                                badge
                                                                bg-light
                                                                text-dark
                                                                border
                                                            ">

                                                                0.00

                                                            </span>
                                                        @endif
                                                    @else
                                                        -
                                                    @endif


                                                </td>



                                                {{-- DEMERIT --}}

                                                <td class="text-center">


                                                    @if ($answer)
                                                        @if ((float) $answer->demerit > 0)
                                                            <span
                                                                class="
                                                                badge
                                                                bg-danger
                                                                fs-6
                                                            ">

                                                                {{ number_format($answer->demerit, 2) }}

                                                            </span>
                                                        @else
                                                            <span
                                                                class="
                                                                badge
                                                                bg-light
                                                                text-dark
                                                                border
                                                            ">

                                                                0.00

                                                            </span>
                                                        @endif
                                                    @else
                                                        -
                                                    @endif


                                                </td>



                                                {{-- CATATAN --}}

                                                <td>


                                                    @if ($answer && !empty($answer->catatan) && strtolower(trim($answer->catatan)) !== 'tiada')
                                                        {{ $answer->catatan }}
                                                    @else
                                                        <span
                                                            class="
                                                            text-muted
                                                        ">

                                                            Tiada

                                                        </span>
                                                    @endif


                                                </td>


                                            </tr>
                                        @endif
                                    @endforeach


                                </tbody>


                            </table>


                        </div>


                    </div>


                </div>
            @endforeach


        </div>


    </div>


</div>
