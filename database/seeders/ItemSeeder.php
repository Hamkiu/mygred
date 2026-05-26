<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InspectionComponentItem;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //A1
        InspectionComponentItem::create([
            'component_id' => 1,
            'description' => 'Suhu sejuk beku: -18°C hingga 0°C',
            'markah' => 6,
            'sort' => 1,
        ]);

        InspectionComponentItem::create([
            'component_id' => 1,
            'description' => 'Suhu dingin (chiller): 0°C hingga 10°C',
            'markah' => 6,
            'sort' => 2,
        ]);
        //tamat A1
        //A2
        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Lipas',
            'markah' => 1,
            'sort' => 3,
        ]);

        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Lalat',
            'markah' => 1,
            'sort' => 4,
        ]);

        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Tikus',
            'markah' => 1,
            'sort' => 5,
        ]);

        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Lain-lain haiwan',
            'markah' => 1,
            'sort' => 6,
        ]);
        //tamat A2
        //A3
        InspectionComponentItem::create([
            'component_id' => 3,
            'description' => 'Peti sejuk sentiasa bersih',
            'markah' => 1,
            'sort' => 7,
        ]);

        InspectionComponentItem::create([
            'component_id' => 3,
            'description' => 'Susunan maknanan dalam keadaan teratur',
            'markah' => 1,
            'sort' => 8,
        ]);

        InspectionComponentItem::create([
            'component_id' => 3,
            'description' => 'Tiada pencemaran silang',
            'markah' => 1,
            'sort' => 9,
        ]);
        //tamat A3
    }
}
