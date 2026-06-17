<div class="card mt-2">
    <div class="card-header" id="head2">
        <section class="mb-0 mt-0">
            <div role="menu" class="collapsed d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo">
                <i data-feather="layers"></i>&nbsp;Senarai Inspection - {{ $premis->id }}
            </div>
        </section>
    </div>
    <div id="defaultAccordionTwo" class="collapse show" aria-labelledby="head2" data-bs-parent="#toggleAccordion">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-end">
                    <a href="{{ route('premis.inspection.create', encode($premis->id)) }}"
                       class="btn btn-primary btn-sm">
                        <i data-feather="plus"></i> Tambah Penilaian
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table id="list_inspection" class="table dt-table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Inspection</th>
                            <th>Markah</th>
                            <th>Gred</th>
                            <th>Star Tandas</th>
                            <th>Tarikh Periksa</th>
                            <th>Tarikh Tamat</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>