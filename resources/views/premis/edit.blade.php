@extends('layouts.master')
@section('title', 'Edit Premis')
@section('content')
@include('include.error')
    <div class="accordion" id="toggleAccordion">
        <div class="card">
            <div class="card-header" id="head1">
                <section class="mb-0 mt-0">
                    <div role="menu" class="collapsed d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#defaultAccordionOne" aria-expanded="false" aria-controls="defaultAccordionOne">
                        <i data-feather="edit"></i>&nbsp;Edit Premis - {{ $premis->id }}
                    </div>
                </section>
            </div>

            <div id="defaultAccordionOne" class="collapse" aria-labelledby="head1" data-bs-parent="#toggleAccordion">
                <form action="{{ route('premis.update', encode($premis->id)) }}" method="post">
                    @csrf
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Nama Pemilik</label>
                                        <input type="text" name="namamilik" class="form-control text-uppercase" value="{{ $premis->namamilik }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Nama Syarikat</label>
                                        <input type="text" name="namasyrkt" class="form-control text-uppercase" value="{{ $premis->namasyrkt }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">Kad Pengenalan</label>
                                        <input type="text" name="pdaftaran" class="form-control" value="{{ $premis->pdaftaran }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">No Telefon</label>
                                        <input type="text" name="telephone" class="form-control" value="{{ $premis->telephone }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">No SSM</label>
                                        <input type="text" name="nomborssm" class="form-control text-uppercase" placeholder="masukkan sendiri" value="{{ $premis->nomborssm }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">No Akaun Lesen</label>
                                        <input type="text" name="nombakaun" class="form-control" value="{{ $premis->nombakaun }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">Kod Akaun</label>
                                        <input type="text" name="codeakaun" class="form-control" value="{{ $premis->codeakaun }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">Rujukan Fail</label>
                                        <input type="text" name="rujukfail" class="form-control text-uppercase" value="{{ $premis->rujukfail }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                {{-- alamat premis --}}
                                <div class="col-md-6">
                                    <div class="card">
                                        <header class="card-header">
                                            Alamat Premis
                                        </header>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <input type="text" name="alamatbus" class="form-control text-uppercase" value="{{ $premis->alamatbus }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-3">
                                                        <input type="text" name="jalanname" class="form-control text-uppercase" value="{{ $premis->jalanname }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="name">Kod Jalan</label>
                                                        <input type="text" name="jalancode" class="form-control" value="{{ $premis->jalancode }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="name">Longitude</label>
                                                        <input type="text" name="longtitud" class="form-control" placeholder="masukkan sendiri" value="{{ $premis->longtitud }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="name">Latitude</label>
                                                        <input type="text" name="latituds" class="form-control" placeholder="masukkan sendiri" value="{{ $premis->latituds }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- tamat alamat premis --}}
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">Status Lesen</label>
                                        <input type="text" name="statuslsn" class="form-control" value="{{ $premis->statuslsn }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">Zon Lesen</label>
                                        <input type="text" name="zonelesen" class="form-control text-uppercase" value="{{ $premis->zonelesen }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="name">Permit ODC</label>
                                        <input type="text" name="permitodc" class="form-control" value="{{ $premis->permitodc }}">
                                    </div>
                                </div>
                            </div>    
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('premis') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- accordian 2 --}}
        @include('inspection.index')
        {{-- tamat accordian 2 --}}
    </div>
@endsection
@push('modal')
    <div class="modal fade" id="aMd1" tabindex="-1" role="dialog" aria-labelledby="aMdl" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" id="aMd1_content">
                
            </div>
        </div>
    </div>
@endpush
@push('scripts')
<script>
    $(document).ready(function() {
        $('#list_inspection').DataTable({

            ...datatableConfig,

            processing: true,
            serverSide: true,

            ajax: {
                url: "{{ route('inspection.list', encode($premis->id)) }}",
            },

            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'id', name: 'id' },
                { data: 'markah', name: 'markah', className: 'text-center' },
                { data: 'gred', name: 'gred', className: 'text-center' },
                { data: 'jumlah_star', name: 'jumlah_star', className: 'text-center' },
                { data: 'status', name: 'status', className: 'text-center' },
                { data: 'tarikh_periksa', name: 'tarikh_periksa' },
                { data: 'tarikh_tamat', name: 'tarikh_tamat' },
                { data: 'tindakan', name: 'tindakan', orderable: false, searchable: false }
            ],
            order: [],
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "pageLength": 10

        });

        $('body').on('click','.viewInspection', function (e){
            var id = $(this).data("id");
            var url = '{{ route("inspection.show", ":id") }}';
            var new_url = url.replace(':id', id);
            $.ajax({
                url: new_url,
                type:'GET',
                success: function(data) {
                    $('#aMd1_content').html(data);
                    $('#aMd1').modal('show');
                }
            });
        });

        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berjaya',
                text: '{{ session('success') }}',
            });
        @endif

        @if(session('success2'))
            Swal.fire({
                icon: 'success',
                title: 'Berjaya',
                text: '{{ session('success2') }}',
            });
        @endif
    });
</script>
@endpush