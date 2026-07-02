<?php

use App\Models\InspectionMain;

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Home', route('dashboard'));
});

Breadcrumbs::for('premis', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Senarai Premis', route('premis'));
});

Breadcrumbs::for('premis.create', function ($trail) {
    $trail->parent('premis');
    $trail->push('Daftar Premis', route('premis.create'));
});

Breadcrumbs::for('premis.edit', function ($trail, $id) {
    $trail->parent('premis');
    $trail->push('Edit Premis', route('premis.edit', $id));
});

Breadcrumbs::for('premis.inspection.create', function ($trail, $id) {
    $trail->parent('premis.edit', $id);
    $trail->push('Penilaian Baharu', route('premis.inspection.create', $id));
});

Breadcrumbs::for('premis.inspection.keterangan', function ($trail, $id) {
    $inspection = InspectionMain::find(decode($id));
    $trail->parent('premis.edit', encode($inspection->premis_id));
    $trail->push('Keterangan', route('premis.inspection.keterangan', $id));
});