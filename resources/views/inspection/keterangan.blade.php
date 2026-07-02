@extends('layouts.master')
@section('title', 'Keterangan Inspection')
@section('content')
@include('include.error')
<div class="card mt-2">
    <div class="card-header" id="head1">
        <section class="mb-0 mt-0">
            <div role="menu" class="collapsed d-flex justify-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#defaultAccordionOne" aria-expanded="false" aria-controls="defaultAccordionOne">
                <i data-feather="edit"></i>&nbsp;Keterangan Inspection - {{ $inspection->id }}
            </div>
        </section>
    </div>
</div>
@endsection