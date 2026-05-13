@extends('layouts.master')
@section('title', 'Nilai Kompaun')
@section('content')
<div class="row layout-top-spacing">
                    
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Kod Kompaun</th>
                        <th>Nilai Kompaun (RM)</th>
                        <th>Pegawai Input</th>
                        <th>Tarikh Input</th>
                        <th>Kemaskini Oleh</th>
                        <th>Tarikh Kemaskini</th>
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
    $('#zero-config').DataTable({
    processing: true,
    serverSide: true,

    ajax: {
        type: 'POST',
        url: "{{ route('kompaun.list') }}",
        data: function (d) {
            d._token = "{{ csrf_token() }}";
        }
    },

    columns: [
        {
            data: 'nil_nilaicode',
            name: 'NIL_NILAICODE'
        },

        {
            data: 'nil_nilaikomp',
            name: 'NIL_NILAIKOMP',
            className: 'text-center'
        },

        {
            data: 'nil_entryoper',
            name: 'NIL_ENTRYOPER',
            className: 'text-center'
        },

        {
            data: 'nil_entrydate',
            name: 'NIL_ENTRYDATE'
        },

        {
            data: 'nil_modfyoper',
            name: 'NIL_MODFYOPER'
        },

        {
            data: 'nil_modfydate',
            name: 'NIL_MODFYDATE'
        },

        { 
            data: 'tindakan', 
            name: 'tindakan',
            searchable: false,
            orderable: false,
            className: 'text-center'
        }
    ],

    "dom": 
        "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l>" +
        "<'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3 align-items-center gap-2'<'custom-btn'>f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count mb-sm-0 mb-3'i><'dt--pagination'p>>",

    "oLanguage": {
        "oPaginate": {
            "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',

            "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },

        "sSearch": "",
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results : _MENU_",
    },

    "lengthMenu": [
        [10, 25, 50, 100],
        [10, 25, 50, 100]
    ],

    "pageLength": 10
});

$('.custom-btn').html(`
    <a href="{{ route('kompaun.create') }}" class="btn btn-primary">
        <i class="fas fa-plus mr-1"></i> Daftar Nilai Kompaun
    </a>
`);
</script>
@endpush