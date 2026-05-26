<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InspectionSection;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InspectionSection::create([
            'code' => 'A',
            'perkara' => 'Kawasan Penyediaan Makanan',
            'sort' => 1,
        ]);

        InspectionSection::create([
            'code' => 'B',
            'perkara' => 'Kawasan Penyajian Makanan',
            'sort' => 2,
        ]);

        InspectionSection::create([
            'code' => 'C',
            'perkara' => 'Pengendali Makanan',
            'sort' => 3,
        ]);

        InspectionSection::create([
            'code' => 'D',
            'perkara' => 'Sistem Bekalan Air',
            'sort' => 4,
        ]);

        InspectionSection::create([
            'code' => 'E',
            'perkara' => 'Kemudahan Sanitasi',
            'sort' => 5,
        ]);

        InspectionSection::create([
            'code' => 'F',
            'perkara' => 'Struktur dan Penyenggaraan Premis',
            'sort' => 6,
        ]);

        InspectionSection::create([
            'code' => 'G',
            'perkara' => 'Lain-lain (Generik)',
            'sort' => 7,
        ]);
    }
}
