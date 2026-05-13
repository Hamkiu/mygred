<?php

namespace App\Http\Controllers;

use App\Models\Premis;
use Illuminate\Http\Request;

class PremisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('premis.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Premis $premis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Premis $premis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Premis $premis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Premis $premis)
    {
        //
    }
}
