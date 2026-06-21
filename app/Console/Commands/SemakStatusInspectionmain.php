<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use App\Models\InspectionMain;
use Carbon\Carbon;

#[Signature('app:status-inspectionmain')]
#[Description('Command description')]
class SemakStatusInspectionmain extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today();

        InspectionMain::chunk(500, function ($records) use ($today) {

            foreach ($records as $record) {

                // DALAM PROSES
                if ($record->tarikh_periksa && !$record->tarikh_tamat) {

                    $status = 'DALAM PROSES';

                }
                // AKTIF
                elseif ($record->tarikh_tamat &&
                        Carbon::parse($record->tarikh_tamat)->gte($today)) {

                    $status = 'AKTIF';

                }
                // TIDAK AKTIF
                else {

                    $status = 'TIDAK AKTIF';

                }

                if ($record->status !== $status) {

                    $record->update([
                        'status' => $status
                    ]);

                    $this->info(
                        "ID {$record->id} -> {$status}"
                    );
                }
            }
        });

        $this->info('Semakan status selesai.');
    }
}
