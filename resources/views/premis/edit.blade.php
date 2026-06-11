@extends('layouts.master')
@section('title', 'Edit Premis')
@section('content')
<div class="card">
    <header class="card-header">
        Edit Premis - {{ $premis->id }}
    </header>

    <div class="card-body">
        <form action="{{ route('premis.update', $premis->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="name">Nama Pemilik</label>
                        <input type="text" name="name" class="form-control" value="{{ $premis->namamilik }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="name">Nama Syarikat</label>
                        <input type="text" name="name" class="form-control" value="{{ $premis->namasyrkt }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label for="name">Kad Pengenalan</label>
                        <input type="text" name="name" class="form-control" value="{{ $premis->pdaftaran }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label for="name">No Telefon</label>
                        <input type="text" name="name" class="form-control" value="{{ $premis->telephone }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label for="name">No SSM</label>
                        <input type="text" name="name" class="form-control" value="{{ $premis->nomborssm }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mb-3">
                        <label for="name">No Akaun Lesen</label>
                        <input type="text" name="name" class="form-control" value="{{ $premis->nombakaun }}">
                    </div>
                </div>
            </div>
        </form>
    </div>
   
</div>
@endsection

@push('scripts')

@endpush