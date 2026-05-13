<?php

namespace App\Http\Controllers;

use App\Models\Kompaun;
use Yajra\DataTables\Facades\DataTables;
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
    public function list(Request $request)
    {
        // dd(Kompaun::all());
        $query = Kompaun::query()
        ->whereNotNull('NIL_NILAICODE')
        ->orderBy('NIL_ENTRYDATE', 'desc');

        $kompaun = $query->get();
        return DataTables::of($kompaun)
        ->addColumn('NIL_NILAICODE', function ($row) {
            return $row->NIL_NILAICODE;
        })
        ->addColumn('NIL_NILAIKOMP', function ($row) {
            return $row->NIL_NILAIKOMP;
        })
        ->addColumn('NIL_ENTRYOPER', function ($row) {
            return $row->NIL_ENTRYOPER;
        })
        ->addColumn('nil_entrydate', function ($row) {
            return date('d/m/Y H:i:a', strtotime($row->nil_entrydate));
        })
        ->addColumn('NIL_MODFYOPER', function ($row) {
            return $row->NIL_MODFYOPER;
        })
        ->addColumn('nil_modfydate', function ($row) {
            return date('d/m/Y H:i:a', strtotime($row->nil_modfydate));
        })
        ->addColumn('tindakan', function ($row) {
            $btn = '';
            $btn .= '<a href="" class="btn btn-primary btn-sm">Edit</a>';
            $btn .= ' <a href="" class="btn btn-danger btn-sm">Delete</a>';
            return $btn;

        })
        ->rawColumns(['tindakan'])
        ->make(true);
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
