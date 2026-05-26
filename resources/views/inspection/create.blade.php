@extends('layouts.master')
@section('title', 'Penilaian Premis')
@section('content')
@foreach($sections as $section)

<div class="card mb-4 section-card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <div>
            <strong>
                {{ $section->code }} - {{ $section->perkara }}
            </strong>
        </div>

        {{-- TOTAL SECTION --}}
        <div>

            <span class="badge bg-dark fs-6">

                Jumlah:
                <span id="section_total_{{ $section->id }}">

                    0

                </span>

                markah

            </span>

        </div>

    </div>

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-bordered table-hover mb-0">

                <thead class="table-light">

                    <tr class="text-center align-middle">

                        <th width="60%">
                            Perkara
                        </th>

                        <th width="25%">
                            Pilihan
                        </th>

                        <th width="15%">
                            Markah
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($section->components as $component)

                        @if($component->has_items)

                            <tr class="table-primary">

                                <td colspan="3">

                                    <strong>
                                        {{ $component->code }}
                                        -
                                        {{ $component->name }}
                                    </strong>

                                </td>

                            </tr>

                            @foreach($component->items as $item)

                                <tr class="section-{{ $section->id }}">

                                    <td>

                                        {{ $item->description }}

                                    </td>

                                    <td class="text-center">

                                        <label class="me-3">

                                            <input type="radio"
                                                name="item_{{ $item->id }}"
                                                value="1"
                                                data-markah="{{ $item->markah }}"
                                                data-section="{{ $section->id }}"
                                                onchange="showMarkah(this, 'item_{{ $item->id }}')">

                                            Patuh

                                        </label>

                                        <label>

                                            <input type="radio"
                                                name="item_{{ $item->id }}"
                                                value="0"
                                                data-markah="0"
                                                data-section="{{ $section->id }}"
                                                onchange="showMarkah(this, 'item_{{ $item->id }}')">

                                            Tidak Patuh

                                        </label>

                                    </td>

                                    <td class="text-center">

                                        <span id="markah_item_{{ $item->id }}"
                                            class="badge bg-secondary item-markah"
                                            data-current="0">

                                            -

                                        </span>

                                    </td>

                                </tr>

                            @endforeach

                        @else

                            <tr class="section-{{ $section->id }}">

                                <td>

                                    <strong>
                                        {{ $component->code }}
                                    </strong>

                                    -

                                    {{ $component->name }}

                                </td>

                                <td class="text-center">

                                    <label class="me-3">

                                        <input type="radio"
                                            name="component_{{ $component->id }}"
                                            value="1"
                                            data-markah="{{ $component->markah }}"
                                            data-section="{{ $section->id }}"
                                            onchange="showMarkah(this, 'component_{{ $component->id }}')">

                                        Patuh

                                    </label>

                                    <label>

                                        <input type="radio"
                                            name="component_{{ $component->id }}"
                                            value="0"
                                            data-markah="0"
                                            data-section="{{ $section->id }}"
                                            onchange="showMarkah(this, 'component_{{ $component->id }}')">

                                        Tidak Patuh

                                    </label>

                                </td>

                                <td class="text-center">

                                    <span id="markah_component_{{ $component->id }}"
                                        class="badge bg-secondary item-markah"
                                        data-current="0">

                                        -

                                    </span>

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