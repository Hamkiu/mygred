<?php

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