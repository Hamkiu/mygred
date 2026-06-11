<?php

namespace App\Http\Controllers;

use App\Models\MaklumatPremis;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PremisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('premis.index');
    }

    public function list(Request $request)
    {
        $query = MaklumatPremis::query();
        return DataTables::of($query)
        ->addIndexColumn()
        ->addColumn('tindakan', function ($row) {
            $btn = '';
            $btn .= '<a href="'.route('premis.edit', $row->id).'" class="btn btn-outline-primary btn-sm me-1" title="Edit Premis"><i data-feather="edit"></i></a>';

            $btn .= '<a href="" class="btn btn-outline-danger btn-sm me-1" title="Delete Premis"><i data-feather="trash-2"></i></a>';
            return $btn;
        })
        ->rawColumns(['tindakan'])
        ->make(true);
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
    public function edit($id)
    {
        $premis = MaklumatPremis::find($id);
        return view('premis.edit', compact('premis'));
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
