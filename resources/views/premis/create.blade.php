@extends('layouts.master')
@section('title', 'Tambahan Premis')
@section('content')
@include('include.error')
<div class="card">
    <header class="card-header">
        Tambahan Premis
    </header>
    <form action="{{ route('premis.store') }}" method="post" id="create_premis_form" enctype="multipart/form-data">
        @csrf
    <div class="card-body">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="name">No Akaun Lesen</label>
                    <div class="input-group mb-3">
                        <input type="text" name="nombakaun" class="form-control" placeholder="No Akaun Lesen" aria-label="No Akaun Lesen" aria-describedby="button-cariLesen">
                        <button class="btn btn-primary" type="button" id="button-cariLesen">Cari</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">No Rujukan Lesen</label>
                    <input type="text" name="codeakaun" class="form-control" value="{{ old('codeakaun') }}" readonly>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">Zon Lesen</label>
                    <input type="text" name="zonelesen" class="form-control" value="{{ old('zonelesen') }}" readonly>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">Status Lesen</label>
                    <input type="text" name="statuslsn" class="form-control" value="{{ old('statuslsn') }}" readonly>
                </div>
            </div>
        </div>
        {{-- maklumat premis --}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="name">Nama Pemilik</label>
                    <input type="text" name="namamilik" class="form-control text-uppercase" value="{{ old('namamilik') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="name">Nama Syarikat</label>
                    <input type="text" name="namasyrkt" class="form-control text-uppercase" value="{{ old('namasyrkt') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">Kad Pengenalan</label>
                    <input type="text" name="pdaftaran" class="form-control" value="{{ old('pdaftaran') }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">No Telefon</label>
                    <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">No SSM</label>
                    <input type="text" name="nomborssm" class="form-control text-uppercase" placeholder="masukkan sendiri" value="{{ old('nomborssm') }}">
                </div>
            </div>
            
            
            <div class="col-md-2">
                <div class="form-group mb-3">
                    <label for="name">Permit ODC</label>
                    <input type="text" name="permitodc" class="form-control" value="{{ old('permitodc') }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label for="name">Rujukan Fail</label>
                    <input type="text" name="rujukfail" class="form-control text-uppercase" value="{{ old('rujukfail') }}">
                </div>
            </div>
        </div>
        
        <div class="row">
            {{-- alamat premis --}}
            <div class="col-md-12">
                <div class="card">
                    <header class="card-header">
                        Alamat Premis
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <input type="text" name="alamatbus" class="form-control text-uppercase" value="{{ old('alamatbus') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <input type="text" name="jalanname" class="form-control text-uppercase" value="{{ old('jalanname') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="name">Kod Jalan</label>
                                    <input type="text" name="jalancode" class="form-control" value="{{ old('jalancode') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="name">Longitude</label>
                                    <input type="text" name="longtitud" class="form-control" value="{{ old('longtitud') }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="name">Latitude</label>
                                    <input type="text" name="latituds" class="form-control" value="{{ old('latituds') }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tamat alamat premis --}}
        </div> 
        
    </div>
    <div class="card-footer text-end">
        <a href="{{ route('premis') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
    </form>

</div>
@endsection

@push('scripts')
<script>
    function resetFormPremis()
    {
        $('input[name="codeakaun"]').val('');
        $('input[name="zonelesen"]').val('');
        $('input[name="statuslsn"]').val('');

        $('input[name="namamilik"]').val('');
        $('input[name="namasyrkt"]').val('');

        $('input[name="pdaftaran"]').val('');
        $('input[name="telephone"]').val('');
        $('input[name="nomborssm"]').val('');

        $('input[name="permitodc"]').val('');
        $('input[name="rujukfail"]').val('');

        $('input[name="alamatbus"]').val('');
        $('input[name="jalanname"]').val('');
        $('input[name="jalancode"]').val('');

        $('input[name="longtitud"]').val('');
        $('input[name="latituds"]').val('');
    }

    $('#button-cariLesen').click(function(){
    
        let nombakaun = $('input[name="nombakaun"]').val();
    
        if(nombakaun == ''){
            Swal.fire({
                icon: 'warning',
                title: 'Perhatian',
                text: 'Masukkan No Akaun Lesen'
            });
            return;
        }
    
        $.ajax({
            url: "{{ route('premis.cari-akaun') }}",
            type: "GET",
            data: {
                nombakaun: nombakaun
            },
            success: function(response){
    
                if(!response.status){
                    resetFormPremis();
                    Swal.fire({
                        icon: 'warning',
                        title: 'Perhatian',
                        text: response.message
                    });

                    $('input[name="nombakaun"]').focus();
                    return;
                }
    
                let d = response.data;
    
                $('input[name="codeakaun"]').val(d.lic_codeakaun);
                $('input[name="zonelesen"]').val(d.are_zonelesen);
                $('input[name="statuslsn"]').val(d.lic_statuslsn);
    
                $('input[name="namamilik"]').val(d.lic_namamilik);
                $('input[name="namasyrkt"]').val(d.lic_namasyrkt);
    
                $('input[name="pdaftaran"]').val(d.lic_pdaftaran);
                $('input[name="telephone"]').val(d.lic_telephone);
    
                $('input[name="permitodc"]').val(d.pbg_permitodc);
                $('input[name="rujukfail"]').val(d.lic_rujukfail);
    
                $('input[name="alamatbus"]').val(d.lic_alamatbus);
                $('input[name="jalanname"]').val(d.jal_jalanname);
                $('input[name="jalancode"]').val(d.lic_jalancode);
    
                $('input[name="longtitud"]').val(d.peg_xcordinat);
                $('input[name="latituds"]').val(d.peg_ycordinat);

            },
            error: function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Ralat',
                    text: 'Ralat semasa mendapatkan maklumat.'
                });
            }
        });
    
    });


    </script>
@endpush