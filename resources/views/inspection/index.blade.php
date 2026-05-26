@extends('layouts.master')
@section('title', 'Penilaian Premis')
@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-stat-card-one">
                <div class="widget-content d-flex align-items-center justify-content-between">
                    <h1>Penilaian Premis</h1>
                    <a href="{{ route('inspection.create') }}" class="btn btn-primary">Penilaian Baharu</a>
                </div>
            </div>
        </div>
    </div>
@endsection