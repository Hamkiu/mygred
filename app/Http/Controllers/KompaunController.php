<?php

namespace App\Http\Controllers;

use App\Models\Kompaun;
use Illuminate\Http\Request;

class KompaunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kompaun.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kompaun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kompaun $kompaun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kompaun $kompaun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kompaun $kompaun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kompaun $kompaun)
    {
        //
    }
}
