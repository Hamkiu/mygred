<?php

namespace App\Http\Controllers;

use App\Models\InspectionSection;
use App\Models\InspectionMain;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inspection.index');
    }

    public function list(Request $request,$id)
    {
        $query = InspectionMain::where('premis_id', decode($id))->get();
        return DataTables::of($query)
        ->addIndexColumn()
        ->addColumn('tarikh_periksa', function ($row) {
            $name = optional($row->user)->name;
            $date = date('d/m/Y', strtotime($row->tarikh_periksa));
            return $name.'<br/>&emsp;'.$date;
        })
        ->addColumn('tarikh_tamat', function ($row) {
            return date('d/m/Y', strtotime($row->tarikh_tamat));
        })
        ->addColumn('tindakan', function ($row) {
            $btn = '';
            $btn .= ' <button type="button" class="btn btn-outline-warning btn-sm me-1 viewInspection" data-id="'.encode($row->id).'" title="View Inspection"><i data-feather="eye"></i></button>';
            return $btn;
        })
        ->rawColumns(['tindakan','tarikh_periksa','tarikh_tamat'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = InspectionSection::with(['components.items'])->orderBy('sort')->get();
    
        return view('inspection.create',compact('sections'));
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
    public function show($id)
    {
        $inspection = InspectionMain::find(decode($id));
        return view('inspection.show', compact('inspection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
