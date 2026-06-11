<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Home', route('dashboard'));
});

Breadcrumbs::for('inspection', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Penilaian Premis', route('inspection'));
});

Breadcrumbs::for('inspection.create', function ($trail) {
    $trail->parent('inspection');
    $trail->push('Penilaian Baharu', route('inspection.create'));
});

Breadcrumbs::for('premis', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Senarai Premis', route('premis'));
});

Breadcrumbs::for('premis.create', function ($trail) {
    $trail->parent('premis');
    $push('Premis Baharu', route('premis.create'));
});

Breadcrumbs::for('premis.edit', function ($trail, $id) {
    $trail->parent('premis');
    $trail->push('Edit Premis', route('premis.edit', $id));
});