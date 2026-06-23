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
            'description' => "• Suhu sejuk beku: -18°C hingga 0°C\n• Suhu dingin (chiller): 0°C hingga 10°C",
            'markah' => 12,
            'sort' => 1,
        ]);

        //tamat A1
        //A2
        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Lipas',
            'markah' => 1,
            'sort' => 1,
        ]);

        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Lalat',
            'markah' => 1,
            'sort' => 2,
        ]);

        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Tikus',
            'markah' => 1,
            'sort' => 3,
        ]);

        InspectionComponentItem::create([
            'component_id' => 2,
            'description' => 'Lain-lain haiwan',
            'markah' => 1,
            'sort' => 4,
        ]);
        //tamat A2
        //A3
        InspectionComponentItem::create([
            'component_id' => 3,
            'description' => 'Peti sejuk sentiasa bersih',
            'markah' => 1,
            'sort' => 1,
        ]);

        InspectionComponentItem::create([
            'component_id' => 3,
            'description' => 'Susunan makanan dalam keadaan teratur',
            'markah' => 1,
            'sort' => 2,
        ]);

        InspectionComponentItem::create([
            'component_id' => 3,
            'description' => 'Tiada pencemaran silang',
            'markah' => 1,
            'sort' => 3,
        ]);
        //tamat A3
        //A4
        InspectionComponentItem::create([
            'component_id' => 4,
            'description' => 'Alas pemotong dan kain pengelap dalam keadaan bersih',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 4,
            'description' => 'Dilarang menggunakan kertas bercetak yang bersentuhan dengan makanan',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 4,
            'description' => 'Peralatan kulinari sentiasa dalam keadaan baik dan bersih',
            'markah' => 1,
            'sort' => 3,
        ]);
        //tamat A4
        //A5
        InspectionComponentItem::create([
            'component_id' => 5,
            'description' => 'Berfungsi dengan baik serta tidak menimbulkan kacau ganggu',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 5,
            'description' => 'Kapasiti yang mencukupi dan efisyen',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat A5
        //A6
        InspectionComponentItem::create([
            'component_id' => 6,
            'description' => 'Jarak minima yang sesuai untuk penyelenggaraan dan tiada kesesakkan',
            'markah' => 1,
            'sort' => 1,
        ]);
        //tamat A6
        //B1
        InspectionComponentItem::create([
            'component_id' => 7,
            'description' => "• Suhu makanan panas: > 60°C\n• Suhu makanan dingin: 1°C hingga 4°C\n• Suhu makanan sejuk beku: < -18°C",
            'markah' => 12,
            'sort' => 1,
        ]);
        //tamat B1
        //B2
        InspectionComponentItem::create([
            'component_id' => 8,
            'description' => 'Bersih',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 8,
            'description' => 'Tidak sumbing, retak atau karat',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat B2
        //B3
        InspectionComponentItem::create([
            'component_id' => 9,
            'description' => 'Bersih',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 9,
            'description' => 'Digunakan berasingkan mengikut jenis kerja',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat B3
        //B4
        InspectionComponentItem::create([
            'component_id' => 10,
            'description' => 'Bersih',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 10,
            'description' => 'Sempurna dan selamat',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat B4
        //C1
        InspectionComponentItem::create([
            'component_id' => 11,
            'description' => "• Mendapat suntikan pelalian anti-tifoid\n• Menghadiri Kursus Pengendali Makanan",
            'markah' => 6,
            'sort' => 1,
        ]);
        //tamat C1
        //C2
        InspectionComponentItem::create([
            'component_id' => 12,
            'description' => 'Berpakaian bersih dan bersesuaian',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 12,
            'description' => 'Memakai apron yang bersih dan berpenutup kepala',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 12,
            'description' => 'Berkuku pendek, bersih dan tidak memakai barang perhiasan diri',
            'markah' => 1,
            'sort' => 3,
        ]);
        InspectionComponentItem::create([
            'component_id' => 12,
            'description' => 'Berkasut',
            'markah' => 1,
            'sort' => 4,
        ]);
        InspectionComponentItem::create([
            'component_id' => 12,
            'description' => 'Tidak merokok',
            'markah' => 1,
            'sort' => 5,
        ]);
        InspectionComponentItem::create([
            'component_id' => 12,
            'description' => 'Tidak melakukan apa-apa perlakuan atau tindakan yang boleh menyebabkan pencemaran makanan',
            'markah' => 1,
            'sort' => 6,
        ]);
        //tamat C2
        //C3 [tidak ada item]
        //D1
        InspectionComponentItem::create([
            'component_id' => 14,
            'description' => 'Terawat',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 14,
            'description' => 'Bersih dan mencukupi',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat D1
        //D2
        InspectionComponentItem::create([
            'component_id' => 15,
            'description' => 'Diambil terus dari paip',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 15,
            'description' => 'Dilarang penggunaan paip getah',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat D2
        //D3 [tidak ada item]
        //E1
        InspectionComponentItem::create([
            'component_id' => 17,
            'description' => 'Bersih dan bebas dari bau busuk',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 17,
            'description' => 'Sempurna dan berfungsi dengan baik',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 17,
            'description' => 'Kedudukan pintu tandas tidak boleh menghala terus ke kawasan penyediaan makanan',
            'markah' => 1,
            'sort' => 3,
        ]);
        InspectionComponentItem::create([
            'component_id' => 17,
            'description' => 'Pengudaraan sempurna',
            'markah' => 1,
            'sort' => 4,
        ]);
        InspectionComponentItem::create([
            'component_id' => 17,
            'description' => 'Bekalan air mencukupi',
            'markah' => 1,
            'sort' => 5,
        ]);
        InspectionComponentItem::create([
            'component_id' => 17,
            'description' => 'Disediakan sabun atau tisu / alat pengering',
            'markah' => 1,
            'sort' => 6,
        ]);
        //tamat E1
        //E2
        InspectionComponentItem::create([
            'component_id' => 18,
            'description' => 'Sinki yang mencukupi',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 18,
            'description' => 'Perangkap sisa makanan, minyak dan lemak (FOG) berfungsi dan diselenggara dengan baik',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 18,
            'description' => 'Kapasiti perangkap (FOG) yang bersesuaian',
            'markah' => 1,
            'sort' => 3,
        ]);
        //tamat E2
        //E3
        InspectionComponentItem::create([
            'component_id' => 19,
            'description' => 'Bersih',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 19,
            'description' => 'Sempurna',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 19,
            'description' => 'Kemudahan sabun cecair dan pengering tangan',
            'markah' => 1,
            'sort' => 3,
        ]);
        //tamat E3
        //F1
        InspectionComponentItem::create([
            'component_id' => 20,
            'description' => 'Tidak licin / tahan lasak',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 20,
            'description' => 'Mudah dibersihkan',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 20,
            'description' => 'Kalis air',
            'markah' => 1,
            'sort' => 3,
        ]);
        InspectionComponentItem::create([
            'component_id' => 20,
            'description' => 'Tidak menakung air / rata',
            'markah' => 1,
            'sort' => 4,
        ]);
        InspectionComponentItem::create([
            'component_id' => 20,
            'description' => 'Bebas dari sesawang, habuk, kulat',
            'markah' => 1,
            'sort' => 5,
        ]);
        //tamat F1
        //F2
        InspectionComponentItem::create([
            'component_id' => 21,
            'description' => 'Mencukupi',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 21,
            'description' => 'Berfungsi',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat F2
        //F3
        InspectionComponentItem::create([
            'component_id' => 22,
            'description' => 'Bersih',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 22,
            'description' => 'Diselenggara dengan baik. (Tiada kerosakan)',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat F3
        //F4
        InspectionComponentItem::create([
            'component_id' => 23,
            'description' => 'Mengalir lancar',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 23,
            'description' => 'Tiada sisa makanan',
            'markah' => 1,
            'sort' => 2,
        ]);
        //tamat F4
        //G1 [tidak ada item]
        //G2 [tidak ada item
        //G3 [tidak ada item]
        //G4
        InspectionComponentItem::create([
            'component_id' => 27,
            'description' => 'Susun atur dan ruang kelegaan',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 27,
            'description' => 'Kebersihan',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 27,
            'description' => 'Pengudaraan dan pencahayaan',
            'markah' => 1,
            'sort' => 3,
        ]);
        //tamat G4
        //G5[tidak ada item]
        //G6[tidak ada item]
        //G7[tidak ada item]
        //G8
        InspectionComponentItem::create([
            'component_id' => 31,
            'description' => 'Alat pemadam api',
            'markah' => 1,
            'sort' => 1,
        ]);
        InspectionComponentItem::create([
            'component_id' => 31,
            'description' => 'Peti pertolongan cemas',
            'markah' => 1,
            'sort' => 2,
        ]);
        InspectionComponentItem::create([
            'component_id' => 31,
            'description' => 'Ruang tangga bebas dari sebarang halangan',
            'markah' => 1,
            'sort' => 3,
        ]);
        //tamat G8
    }
}
