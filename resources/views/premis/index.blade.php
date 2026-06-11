@extends('layouts.master')
@section('title', 'Senarai Premis')
@section('content')
<div class="card">
    <header class="card-header">
        Senarai Premis
    </header>
    
    <div class="card-body">
        {{-- <h4 class="card-title">Special title treatment</h4> --}}
        <div class="table-responsive">
            <table id="list_premis" class="table dt-table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Premis</th>
                        <th>No Akaun</th>
                        <th>Nama Pemilik</th>
                        <th>Nama Syarikat</th>
                        <th>Status Lesen</th>
                        <th>Zon Lesen</th>
                        <th>No Rujukan Fail</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#list_premis').DataTable({

            ...datatableConfig,

            processing: true,
            serverSide: true,

            ajax: {
                url: '{{ route("premis.list") }}',
                type: 'GET'
            },

            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'id', name: 'id' },
                { data: 'nombakaun', name: 'nombakaun' },
                { data: 'namamilik', name: 'namamilik' },
                { data: 'namasyrkt', name: 'namasyrkt' },
                { data: 'statuslsn', name: 'statuslsn', className: 'text-center' },
                { data: 'zonelesen', name: 'zonelesen', width: '3%', className: 'text-center'},
                { data: 'rujukfail', name: 'rujukfail' },
                { data: 'tindakan', name: 'tindakan', orderable: false, searchable: false }
            ],
            order: [],
            "lengthMenu": [
                [30, 70, 100, -1],
                [30, 70, 100, "All"]
            ],
            "pageLength": 30

        });
    });
</script>
@endpush