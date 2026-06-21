<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\MaklumatPremis;
use App\Models\InspectionMain;

#[Signature('app:import-oracle-inspection')]
#[Description('Command description')]
class ImportOracleInspection extends Command
{
    /**
     * Execute the console command.
     */
    private function convertTime($time)
    {
        if (!$time) {
            return '00:00:00';
        }
    
        try {
    
            $time = strtoupper(trim($time));
    
            $time = str_replace('.', ':', $time);
    
            return \Carbon\Carbon::createFromFormat(
                'g:iA',
                $time
            )->format('H:i:s');
    
        } catch (\Exception $e) {
    
            return '00:00:00';
        }
    }

    public function handle()
    {
        $rows = DB::connection('oracle')
            ->table('SPLN.PLN_PENGREDAN')
            ->get();

        $count = 0;

        foreach ($rows as $row) {

            // cari premis yang telah diimport
            $premis = MaklumatPremis::where(
                'oracle_id',
                $row->pen_nomborids
            )->first();

            if (!$premis) {

                $this->error(
                    "Premis tidak dijumpai : {$row->pen_nomborids}"
                );

                continue;
            }

            $inspectionId = 'IN' .
                str_pad($row->pen_nomborids, 10, '0', STR_PAD_LEFT);

            InspectionMain::updateOrCreate(

                [
                    'id' => $inspectionId
                ],

                [
                    'premis_id' => $premis->id,

                    // gunakan admin sementara
                    'user_id' => 1,

                    'status' => 'DALAM PROSES',

                    'tarikh_periksa' => $row->pen_tarikhins
                        ? date('Y-m-d', strtotime($row->pen_tarikhins))
                        : now(),

                    'masa_mula' => $this->convertTime($row->pen_masastart),
                    'masa_tamat' => $this->convertTime($row->pen_masatamat),

                    'bil_tempatan_lelaki' => $row->pen_ptempatan ?? 0,
                    'bil_tempatan_perempuan' => 0,

                    'bil_asing_lelaki' => $row->pen_kerjasing ?? 0,
                    'bil_asing_perempuan' => 0,

                    'kursus_kendalimakanan' => $row->pen_kursuspmk ?? 0,
                    'suntikan_tifoid' => $row->pen_suntikans ?? 0,

                    'status_gt' => strtoupper($row->pen_statusgts ?? '') == 'Y',

                    'surat_amaran' => strtoupper($row->pen_warletter ?? '') == 'Y',

                    'no_kompaun' => $row->pen_jumkmpaun ?? '',

                    'nilai_kompaun' => $row->pen_nilaikomp ?? 0,

                    'no_sijil' => $row->pen_nombsijil ?? '',

                    'jumlah_markah' =>  0,

                    'jumlah_demerit' => 0,

                    'markah' => $row->pen_jummarkah ?? 0,

                    'gred' => $row->pen_pengredan,

                    'status_ccp' => strtoupper($row->pen_statusccp ?? '') == 'Y',

                    'tandas' => strtoupper($row->pen_tandasflg ?? '') == 'Y',

                    'jumlah_star' => $row->pen_jmlahstar ?? 0,

                    'catatan' => $row->pen_catatanss,

                    'tarikh_tamat' => $row->pen_expirydat
                        ? date('Y-m-d', strtotime($row->pen_expirydat))
                        : null,

                    'source' => 'ORACLE_MIGRATION',
                ]
            );

            $count++;

            if ($count % 100 == 0) {

                $this->info(
                    "Import : {$count} rekod"
                );
            }
        }

        $this->info(
            "SELESAI IMPORT {$count} REKOD"
        );
    }
}
