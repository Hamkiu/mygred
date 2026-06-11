<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\MaklumatPremis;
use App\Models\InspectionMain;

#[Signature('app:import-oracle-pengredan')]
#[Description('Command description')]
class ImportOraclePengredan extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rows = DB::connection('oracle')->table('SPLN.PLN_PENGREDAN')->get();

        foreach ($rows as $row) {
            $premisId = 'PR'.$row->pen_nomborids;
            
            MaklumatPremis::updateOrCreate(
                [
                    'id' => $premisId
                ],
                [
                    'nombakaun' => $row->pen_nombakaun,
                    'oracle_id' => $row->pen_nomborids,
                    'nomserial' => $row->pen_nomserial,
                    'codeakaun' => $row->pen_codeakaun,
                    'namamilik' => $row->pen_namamilik,
                    'namasyrkt' => $row->pen_namasyrkt,
                    'pdaftaran' => $row->pen_pdaftaran,
                    'alamatbus' => $row->pen_alamatbus,
                    'telephone' => $row->pen_telephone,
                    'rujukfail' => $row->pen_rujukfail,
                    'jalancode' => $row->pen_jalancode,
                    'permitodc' => $row->pen_permitodc,
                    'nomborssm' => $row->pen_nomborssm,
                    'latituds' => $row->pen_latitudss,
                    'longtitud' => $row->pen_longtitud,
                    'jalanname' => $row->pen_jalanname,
                    'statuslsn' => $row->pen_statuslsn,
                    'zonelesen' => $row->pen_zonelesen,
                ]
            );
        }
        $this->info('Import Premis Selesai');
    }
}
