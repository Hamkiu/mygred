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