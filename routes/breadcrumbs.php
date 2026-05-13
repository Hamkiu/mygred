<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Home', route('dashboard'));
});

// Nilai Kompaun
Breadcrumbs::for('kompaun', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Senarai Nilai Kompaun', route('kompaun'));
});

// Daftar Nilai Kompaun
Breadcrumbs::for('kompaun.create', function ($trail) {
    $trail->parent('kompaun');
    $trail->push('Daftar Nilai Kompaun', route('kompaun.create'));
});

//Kategori
Breadcrumbs::for('kategori', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Senarai Kategori', route('kategori'));
});

//Premis
Breadcrumbs::for('premis', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Senarai Premis', route('premis'));
});