<?php

namespace App\Http\Controllers;

use App\Models\MaklumatPremis;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

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
            $btn .= '<a href="'.route('premis.edit', encode($row->id)).'" class="btn btn-outline-primary btn-sm me-1" title="Edit Premis"><i data-feather="edit"></i></a>';

            $btn .= '<a href="'.route('premis.destroy', encode($row->id)).'" class="btn btn-outline-danger btn-sm me-1" title="Delete Premis"><i data-feather="trash-2"></i></a>';
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
        return view('premis.create');
    }

    public function cariAkaun2(Request $request)
    {
        $akaun = $request->nombakaun;

         // Semak dalam MySQL dahulu
        $wujud = MaklumatPremis::where('nombakaun', $akaun)->exists();

        if ($wujud) {
            return response()->json([
                'status' => false,
                'message' => 'No Akaun Lesen ini telah didaftarkan.'
            ]);
        }

        $premis = DB::connection('oracle')
            ->selectOne("
                SELECT
                    LIC_NOMBAKAUN,

                    'L'||LPAD(TO_CHAR(LIC_NOMBAKAUN),7,'0')||'-'||
                    LPAD(TO_CHAR(LIC_NOMSERIAL),2,'0') AS LIC_CODEAKAUN,

                    LIC_NAMAMILIK,
                    LIC_NAMASYRKT,
                    LIC_PDAFTARAN,
                    LIC_ALAMATBUS,
                    LIC_TELEPHONE,
                    LIC_RUJUKFAIL,
                    LIC_JALANCODE,

                    'M'||LPAD(TO_CHAR(MAS_NOMBAKAUN),7,'0')||'-'||
                    LPAD(TO_CHAR(MAS_NOMSERIAL),2,'0') AS PBG_PERMITODC,

                    JAL_JALANNAME,

                    DECODE(LIC_STATUSLSN,
                        'Y','AKTIF',
                        'B','BATAL',
                        'X','KOMPOSIT',
                        'T','TAK AKTIF',
                        'G','GANTUNG'
                    ) AS LIC_STATUSLSN,

                    DECODE(ARE_ZONELESEN,
                        'L001','A',
                        'L002','B',
                        'L003','C',
                        'L004','D',
                        'L005','E'
                    ) AS ARE_ZONELESEN

                FROM SPLN.PLN_LICENCEES
                LEFT JOIN SPBG.PBG_MASTERREC
                    ON LIC_NOMBAKAUN = MAS_NOMBAKAUN
                LEFT JOIN SUTL.UTL_JALANCODE
                    ON LIC_JALANCODE = JAL_JALANCODE
                INNER JOIN SUTL.UTL_AREASCODE
                    ON JAL_AREASCODE = ARE_AREASCODE

                WHERE LIC_NOMBAKAUN = ?
            ", [$akaun]);

        if (!$premis) {
            return response()->json([
                'status' => false,
                'message' => 'Rekod tidak dijumpai'
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $premis
        ]);
    }

    public function cariAkaun(Request $request)
    {
        $akaun = $request->nombakaun;

         // Semak dalam MySQL dahulu
        $wujud = MaklumatPremis::where('nombakaun', $akaun)->exists();

        if ($wujud) {
            return response()->json([
                'status' => false,
                'message' => 'No Akaun Lesen ini telah didaftarkan.'
            ]);
        }

        $premis = DB::connection('oracle')
            ->selectOne("
            SELECT
                LIC_NOMBAKAUN,
                LIC_NOMSERIAL,

                'L'||LPAD(TO_CHAR(LIC_NOMBAKAUN),7,'0')||'-'||
                LPAD(TO_CHAR(LIC_NOMSERIAL),2,'0') AS LIC_CODEAKAUN,

                LIC_NAMAMILIK,
                LIC_NAMASYRKT,
                LIC_PDAFTARAN,
                LIC_ALAMATBUS,
                LIC_TELEPHONE,
                LIC_RUJUKFAIL,
                LIC_JALANCODE,

                'M'||LPAD(TO_CHAR(MAS_NOMBAKAUN),7,'0')||'-'||
                LPAD(TO_CHAR(MAS_NOMSERIAL),2,'0') AS PBG_PERMITODC,

                JAL_JALANNAME,

                DECODE(LIC_STATUSLSN,
                    'Y','AKTIF',
                    'B','BATAL',
                    'X','KOMPOSIT',
                    'T','TAK AKTIF',
                    'G','GANTUNG'
                ) AS LIC_STATUSLSN,

                DECODE(ARE_ZONELESEN,
                    'L001','A',
                    'L002','B',
                    'L003','C',
                    'L004','D',
                    'L005','E'
                ) AS ARE_ZONELESEN,
                PEG_XCORDINAT,
                PEG_YCORDINAT
           FROM SPLN.PLN_LICENCEES
            LEFT JOIN SPBG.PBG_MASTERREC
                ON LIC_NOMBAKAUN = MAS_NOMBAKAUN

            LEFT JOIN SUTL.UTL_JALANCODE
                ON LIC_JALANCODE = JAL_JALANCODE

            LEFT JOIN STKN.TKN_PEGANGANS
                ON LIC_NOMBAKAUN = PEG_NOMBAKAUN

            INNER JOIN SUTL.UTL_AREASCODE
                ON JAL_AREASCODE = ARE_AREASCODE

            WHERE LIC_NOMBAKAUN = ?
            ", [$akaun]);
        if (!$premis) {
            return response()->json([
                'status' => false,
                'message' => 'Rekod tidak dijumpai'
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => $premis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombakaun' => 'required',
            'codeakaun' => 'required',
        ],
        [
            'nombakaun.required' => 'No Akaun Lesen tidak boleh kosong',
            'codeakaun.required' => 'No Rujukan Lesen tidak boleh kosong',
        ]);
        // dd($request->all());
        $premisId = generateId('PR', 'maklumat_premis', 'id');
        MaklumatPremis::create([
            'id' => $premisId,
            'nombakaun' => $request->nombakaun,
            'codeakaun' => $request->codeakaun,
            'namamilik' => strtoupper($request->namamilik),
            'namasyrkt' => strtoupper($request->namasyrkt),
            'pdaftaran' => $request->pdaftaran,
            'alamatbus' => strtoupper($request->alamatbus),
            'telephone' => $request->telephone,
            'rujukfail' => strtoupper($request->rujukfail),
            'jalancode' => $request->jalancode,
            'permitodc' => $request->permitodc,
            'nomborssm' => strtoupper($request->nomborssm),
            'latituds' => $request->latituds,
            'longtitud' => $request->longtitud,
            'jalanname' => strtoupper($request->jalanname),
            'statuslsn' => $request->statuslsn,
            'zonelesen' => $request->zonelesen,
        ]);

        return redirect()->route('premis.edit', encode($premisId))->with('success', 'Premis berjaya ditambah:'.$premisId);
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
        $premis = MaklumatPremis::find(decode($id));
        return view('premis.edit', compact('premis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'namamilik' => 'required',
            'namasyrkt' => 'required',
        ],
        [
            'namamilik.required' => 'Nama Pemilik tidak boleh kosong',
            'namasyrkt.required' => 'Nama Syarikat tidak boleh kosong',
        ]);
        $premis = MaklumatPremis::find(decode($id));
        $premis->update([
            'namamilik' => strtoupper($request->namamilik),
            'namasyrkt' => strtoupper($request->namasyrkt),
            'pdaftaran' => $request->pdaftaran,
            'alamatbus' => strtoupper($request->alamatbus),
            'telephone' => $request->telephone,
            'rujukfail' => strtoupper($request->rujukfail),
            'jalancode' => $request->jalancode,
            'permitodc' => $request->permitodc,
            'nomborssm' => strtoupper($request->nomborssm),
            'latituds' => $request->latituds,
            'longtitud' => $request->longtitud,
            'jalanname' => strtoupper($request->jalanname),
            'statuslsn' => $request->statuslsn,
            'zonelesen' => strtoupper($request->zonelesen),
        ]);
        return redirect()->route('premis.edit', $id)->with('success2', 'Premis berjaya diupdate:'.decode($id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $premis = MaklumatPremis::find(decode($id));
        $premis->delete();
        return redirect()->route('premis')->with('success', 'Premis berjaya dihapus');
    }
}
