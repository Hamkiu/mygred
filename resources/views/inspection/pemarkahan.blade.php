<div class="card mt-2">
    <div class="card-header" id="head2">
        <section class="mb-0 mt-0">
            <div role="menu" class="collapsed d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo">
                <i data-feather="check-circle"></i>&nbsp;Pemarkahan
            </div>
        </section>
    </div>
    <div id="defaultAccordionTwo" class="collapse" aria-labelledby="head2" data-bs-parent="#toggleAccordion">
        <div class="card-body">
            
            @foreach($sections as $section)
                @php

                    $maxMarkah = 0;

                    foreach($section->components as $component){

                        if($component->has_items){

                            $maxMarkah += $component->items->sum('markah');

                        }else{

                            $maxMarkah += $component->markah;

                        }
                    }

                @endphp

                <div class="card mb-4 section-card" data-section-id="{{ $section->id }}"
                    data-section-name="{{ $section->code }} - {{ $section->perkara }}"
                    data-max-markah="{{ $maxMarkah }}">

                    <div class="card-header d-flex justify-content-between align-items-center">

                        <div>
                            <strong class="section-title">
                                {{ $section->code }} - {{ $section->perkara }}
                            </strong>
                        </div>
                    
                        <div class="d-flex gap-2">
                    
                            <span class="badge bg-success fs-6">
                                Markah :
                                <span id="section_markah_{{ $section->id }}">
                                    0
                                </span>
                            </span>
                    
                            <span class="badge bg-danger fs-6">
                                Demerit :
                                <span id="section_demerit_{{ $section->id }}">
                                    0
                                </span>
                            </span>
                    
                            <span class="badge bg-primary fs-6">
                                Skor :
                                <span id="section_skor_{{ $section->id }}">
                                    0
                                </span>
                                /
                                {{ $maxMarkah }}
                            </span>
                            <input type="hidden" id="section_max_{{ $section->id }}" value="{{ $maxMarkah }}">
                    
                        </div>
                    
                    </div>

                    <div class="card-body p-0">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover mb-0">

                                <thead class="table-light">

                                    <tr class="text-center align-middle">
                                    
                                        <th width="35%">
                                            Perkara
                                        </th>
                                    
                                        <th width="20%">
                                            Pilihan
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

                                        @foreach($section->components as $component)
                                        
                                            @if($component->has_items)
                                        
                                                <tr class="table-primary">
                                        
                                                    <td colspan="5">
                                        
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
                                        
                                                            {!! nl2br(e($item->description)) !!}
                                        
                                                            <input type="hidden"
                                                                name="answers[item_{{ $item->id }}][component_id]"
                                                                value="{{ $component->id }}">
                                        
                                                            <input type="hidden"
                                                                name="answers[item_{{ $item->id }}][component_item_id]"
                                                                value="{{ $item->id }}">
                                        
                                                        </td>
                                        
                                                        <td class="text-center">
                                        
                                                            <label class="me-3">
                                        
                                                                <input type="radio"
                                                                    name="answers[item_{{ $item->id }}][is_patuh]"
                                                                    value="1"
                                                                    data-markah="{{ $item->markah }}"
                                                                    data-section="{{ $section->id }}"
                                                                    onchange="
                                                                        showMarkah(this, 'item_{{ $item->id }}');
                                                                        toggleRemark(this, 'item_{{ $item->id }}');
                                                                    ">
                                        
                                                                Patuh
                                        
                                                            </label>
                                        
                                                            <label>
                                        
                                                                <input type="radio"
                                                                    name="answers[item_{{ $item->id }}][is_patuh]"
                                                                    value="0"
                                                                    data-markah="{{ $item->markah }}"
                                                                    data-section="{{ $section->id }}"
                                                                    onchange="
                                                                        showMarkah(this, 'item_{{ $item->id }}');
                                                                        toggleRemark(this, 'item_{{ $item->id }}');
                                                                    ">
                                        
                                                                Tidak Patuh
                                        
                                                            </label>
                                        
                                                        </td>
                                        
                                                        <td class="text-center">
                                        
                                                            <span
                                                                id="markah_item_{{ $item->id }}"
                                                                class="badge bg-secondary item-markah"
                                                                data-current="0">
                                        
                                                                -
                                        
                                                            </span>
                                        
                                                        </td>
                                        
                                                        <td class="text-center">

                                                            <span
                                                                id="demerit_item_{{ $item->id }}"
                                                                class="badge bg-danger item-demerit"
                                                                data-current="0">
                                                        
                                                                -
                                                        
                                                            </span>
                                                        
                                                            <input
                                                                type="hidden"
                                                                id="hidden_demerit_item_{{ $item->id }}"
                                                                name="answers[item_{{ $item->id }}][demerit]"
                                                                value="0">
                                                        
                                                        </td>
                                        
                                                        <td>
                                        
                                                            <textarea
                                                                rows="1"
                                                                class="form-control form-control-sm"
                                                                id="catatan_item_{{ $item->id }}"
                                                                name="answers[item_{{ $item->id }}][catatan]"
                                                                style="display:none;"></textarea>
                                        
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
                                        
                                                        <input type="hidden"
                                                            name="answers[component_{{ $component->id }}][component_id]"
                                                            value="{{ $component->id }}">
                                        
                                                    </td>
                                        
                                                    <td class="text-center">
                                        
                                                        <label class="me-3">
                                        
                                                            <input type="radio"
                                                                name="answers[component_{{ $component->id }}][is_patuh]"
                                                                value="1"
                                                                data-markah="{{ $component->markah }}"
                                                                data-section="{{ $section->id }}"
                                                                onchange="
                                                                    showMarkah(this, 'component_{{ $component->id }}');
                                                                    toggleRemark(this, 'component_{{ $component->id }}');
                                                                ">
                                        
                                                            Patuh
                                        
                                                        </label>
                                        
                                                        <label>
                                        
                                                            <input type="radio"
                                                                name="answers[component_{{ $component->id }}][is_patuh]"
                                                                value="0"
                                                                data-markah="{{ $component->markah }}"
                                                                data-section="{{ $section->id }}"
                                                                onchange="
                                                                    showMarkah(this, 'component_{{ $component->id }}');
                                                                    toggleRemark(this, 'component_{{ $component->id }}');
                                                                ">
                                        
                                                            Tidak Patuh
                                        
                                                        </label>
                                        
                                                    </td>
                                        
                                                    <td class="text-center">
                                        
                                                        <span
                                                            id="markah_component_{{ $component->id }}"
                                                            class="badge bg-secondary item-markah"
                                                            data-current="0">
                                        
                                                            -
                                        
                                                        </span>
                                        
                                                    </td>
                                        
                                                    <td class="text-center">

                                                        <span
                                                            id="demerit_component_{{ $component->id }}"
                                                            class="badge bg-danger item-demerit"
                                                            data-current="0">
                                                    
                                                            -
                                                    
                                                        </span>
                                                    
                                                        <input
                                                            type="hidden"
                                                            id="hidden_demerit_component_{{ $component->id }}"
                                                            name="answers[component_{{ $component->id }}][demerit]"
                                                            value="0">
                                                    
                                                    </td>
                                        
                                                    <td>
                                        
                                                        <textarea
                                                            rows="1"
                                                            class="form-control form-control-sm"
                                                            id="catatan_component_{{ $component->id }}"
                                                            name="answers[component_{{ $component->id }}][catatan]"
                                                            style="display:none;"></textarea>
                                        
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