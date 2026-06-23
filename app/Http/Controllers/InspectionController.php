<?php

namespace App\Http\Controllers;

use App\Models\InspectionSection;
use App\Models\InspectionMain;
use App\Models\InspectionAnswer;
use App\Models\InspectionComponent;
use App\Models\InspectionComponentItem;
use App\Models\MaklumatPremis;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

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
        ->addColumn('status', function ($row) {
            $btn = '';
            if ($row->status == 'DALAM PROSES') {
                $btn .= '<span class="badge bg-warning">'.$row->status.'</span>';
            } elseif ($row->status == 'AKTIF') {
                $btn .= '<span class="badge bg-success">'.$row->status.'</span>';
            } else {
                $btn .= '<span class="badge bg-danger">'.$row->status.'</span>';
            }
            return $btn;
        })
        ->addColumn('tarikh_periksa', function ($row) {
            $name = optional($row->user)->name;
            $date = date('d/m/Y', strtotime($row->tarikh_periksa));
            return $name.'<br/>&emsp;'.$date;
        })
        ->addColumn('tarikh_tamat', function ($row) {
            if ($row->tarikh_tamat) {
                return date('d/m/Y', strtotime($row->tarikh_tamat));
            } else {
                return '-';
            }
        })
        ->addColumn('tindakan', function ($row) {
            $btn = '';
            $btn .= ' <button type="button" class="btn btn-outline-warning btn-sm me-1 viewInspection" data-id="'.encode($row->id).'" title="View Inspection"><i data-feather="eye"></i></button>';
            $btn .= ' <a href="'.route('inspection.destroy', encode($row->id)).'" class="btn btn-outline-danger btn-sm me-1" title="Delete Inspection"><i data-feather="trash-2"></i></a>';
            return $btn;
        })
        ->rawColumns(['tindakan','tarikh_periksa','tarikh_tamat','status'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $premis = MaklumatPremis::find(decode($id));
        $sections = InspectionSection::with(['components.items'])->orderBy('sort')->get();
    
        return view('inspection.create',compact('sections','premis'));
    }

    public function review(Request $request, $id)
    {
        $premis = MaklumatPremis::findOrFail(decode($id));
    
        $sections = InspectionSection::with([
            'components.items'
        ])->get();
    
        $answers = $request->answers;
    
        $jumlahMarkah = 0;
        $jumlahDemerit = 0;
    
        foreach ($answers as $answer) {
    
            $jumlahMarkah += $answer['markah'] ?? 0;
            $jumlahDemerit += $answer['demerit'] ?? 0;
        }
    
        return view(
            'inspection.review',
            compact(
                'premis',
                'answers',
                'sections',
                'jumlahMarkah',
                'jumlahDemerit'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        dd($request->all());
        $validated = $request->validate([
            'demerit' => 'nullable|integer|min:0|max:100',
        ],
        [
            'demerit.integer' => 'Demerit harus berupa angka',
            'demerit.min' => 'Demerit minimum 0',
            'demerit.max' => 'Demerit maksimum 100',
        ]);
        $premis = MaklumatPremis::find(decode($id));    
        $inspectionId = generateId('IN', 'inspection_mains', 'id');
    
        $inspectionMain = InspectionMain::create([
            'id' => $inspectionId,
            'premis_id' => $premis->id,
            'user_id' => Auth::id(),
            'status' => 'DALAM PROSES',
            'tarikh_periksa' => now()->format('Y-m-d'),
    
            'bil_tempatan_lelaki' => $request->bil_tempatan_lelaki,
            'bil_tempatan_perempuan' => $request->bil_tempatan_perempuan,
            'bil_asing_lelaki' => $request->bil_asing_lelaki,
            'bil_asing_perempuan' => $request->bil_asing_perempuan,
    
            'kursus_kendalimakanan' => $request->kursus_kendalimakanan,
            'suntikan_tifoid' => $request->suntikan_tifoid,
    
            'status_gt' => $request->status_gt,
    
            'surat_amaran' => $request->surat_amaran,
            'no_kompaun' => $request->no_kompaun,
            'nilai_kompaun' => $request->nilai_kompaun,
    
            'source' => 'SYSTEM',
        ]);
    
        $jumlahMarkah = 0;
        $jumlahDemerit = 0;
    
        foreach ($request->answers as $answer) {
    
            $markah = 0;
    
            if (!empty($answer['component_item_id'])) {
    
                $item = InspectionComponentItem::find($answer['component_item_id']);
    
                if (($answer['is_patuh'] ?? 0) == 1) {
                    $markah = $item->markah;
                }
    
            } else {
    
                $component = InspectionComponent::find($answer['component_id']);
    
                if (($answer['is_patuh'] ?? 0) == 1) {
                    $markah = $component->markah;
                }
            }
    
            InspectionAnswer::create([
                'main_id' => $inspectionMain->id,
                'component_id' => $answer['component_id'] ?? null,
                'component_item_id' => $answer['component_item_id'] ?? null,
                'is_patuh' => $answer['is_patuh'] ?? 0,
                'markah_diperolehi' => $markah,
                'demerit' => $answer['demerit'] ?? 0,
                'catatan' => $answer['catatan'] ?? null,
            ]);
    
            $jumlahMarkah += $markah;
            $jumlahDemerit += ($answer['demerit'] ?? 0);
        }
    
        // Kira peratus
        $markahAkhir = 0;
    
        if ($jumlahMarkah > 0) {
            $markahAkhir = (($jumlahMarkah - $jumlahDemerit) / $jumlahMarkah) * 100;
        }
    
        // Kira gred
        $gred = null;
    
        if ($markahAkhir >= 86) {
            $gred = 'A';
        } elseif ($markahAkhir >= 71) {
            $gred = 'B';
        } elseif ($markahAkhir >= 51) {
            $gred = 'C';
        }
    
        // Semakan CCP
        // $ccpFail = InspectionAnswer::where('main_id', $inspectionMain->id)
        //     ->whereHas('component', function ($q) {
        //         $q->where('status_ccp', 1);
        //     })
        //     ->where('is_patuh', 0)
        //     ->exists();
    
        $inspectionMain->update([
            'jumlah_markah' => $jumlahMarkah,
            'jumlah_demerit' => $jumlahDemerit,
            'markah' => round($markahAkhir, 2),
            'gred' => $gred,
        ]);
    
        return redirect()
            ->route('premis.edit', encode($premis->id))
            ->with('success', 'Pemeriksaan berjaya disimpan.');
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
        $inspection = InspectionMain::find(decode($id));
        $inspection->delete();
        return redirect()->route('premis.edit', encode($inspection->premis_id))->with('success', 'Pemeriksaan berjaya dihapus.');
    }
}
