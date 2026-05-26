<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InspectionComponent;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //section A
        InspectionComponent::create([
            'section_id' => 1,
            'code' => 'A1',
            'name' => 'Kawalan suhu dalam penyimpanan dan penyediaan makanan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 1,
        ]);

        InspectionComponent::create([
            'section_id' => 1,
            'code' => 'A2',
            'name' => 'Kawalan serangga perosak / LILATI yang efektif termasuk kawalan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 2,
        ]);

        InspectionComponent::create([
            'section_id' => 1,
            'code' => 'A3',
            'name' => 'Kebersihan peti sejuk',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 3,
        ]);

        InspectionComponent::create([
            'section_id' => 1,
            'code' => 'A4',
            'name' => 'Kebersihan peralatan dan kemudahan memasak',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 4,
        ]);

        InspectionComponent::create([
            'section_id' => 1,
            'code' => 'A5',
            'name' => 'Sistem pelepasan asap dan haba',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 5,
        ]);

        InspectionComponent::create([
            'section_id' => 1,
            'code' => 'A6',
            'name' => 'Ruang kelegaan di antara peralatan dan dinding / lantai',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 6,
        ]);

        //tamat section A
        //section B
        InspectionComponent::create([
            'section_id' => 2,
            'code' => 'B1',
            'name' => 'Kawalan suhu dan tempat mempamerkan makanan yang sesuai mengikut keadaan dan jenis makanan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 1,
        ]);
        InspectionComponent::create([
            'section_id' => 2,
            'code' => 'B2',
            'name' => 'Peralatan kulinari yang digunakan untuk penyajian makanan perlu sentiasa dalam keadaan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 2,
        ]);
        InspectionComponent::create([
            'section_id' => 2,
            'code' => 'B3',
            'name' => 'Kain pengelap, alas dan peralatan memotong mestilah:',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 3,
        ]);
        InspectionComponent::create([
            'section_id' => 2,
            'code' => 'B4',
            'name' => 'Meja, kerusi dan peralatan hendaklah sentiasa:',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 4,
        ]);
        //tamat section B
        //section C
        InspectionComponent::create([
            'section_id' => 3,
            'code' => 'C1',
            'name' => 'Pemeriksaan kesihatan ke atas semua pengendali makanan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 1,
        ]);
        InspectionComponent::create([
            'section_id' => 3,
            'code' => 'C2',
            'name' => 'Tahap kebersihan diri yang baik:',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 2,
        ]);
        InspectionComponent::create([
            'section_id' => 3,
            'code' => 'C3',
            'name' => 'Tiada masalah kesihatan yang berkaitan dengan pencemaran makanan',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 3,
        ]);
        //tamat section C
        //section D
        InspectionComponent::create([
            'section_id' => 4,
            'code' => 'D1',
            'name' => 'Sumber bekalan air yang selamat',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 1,
        ]);
        InspectionComponent::create([
            'section_id' => 4,
            'code' => 'D2',
            'name' => 'Penggunaan sumber bekalan air',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 2,
        ]);
        InspectionComponent::create([
            'section_id' => 4,
            'code' => 'D3',
            'name' => 'Tiada kebocoran paip di premis',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 3,
        ]);
        //tamat section D
        //section E
        InspectionComponent::create([
            'section_id' => 5,
            'code' => 'E1',
            'name' => 'Keadaan kelengkapan kemudahan tandas',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 1,
        ]);
        InspectionComponent::create([
            'section_id' => 5,
            'code' => 'E2',
            'name' => 'Kemudahan mencukupi',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 2,
        ]);
        InspectionComponent::create([
            'section_id' => 5,
            'code' => 'E3',
            'name' => 'Kemudahan tempat mencuci tangan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 3,
        ]);
        //tamat section E
        //section F
        InspectionComponent::create([
            'section_id' => 6,
            'code' => 'F1',
            'name' => 'Keadaan lantai, dinding dan siling',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 1,
        ]);
        InspectionComponent::create([
            'section_id' => 6,
            'code' => 'F2',
            'name' => 'Sistem pengudaraan dan pencahayaan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 2,
        ]);
        InspectionComponent::create([
            'section_id' => 6,
            'code' => 'F3',
            'name' => 'Sistem perparitan yang sempurna',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 3,
        ]);
        InspectionComponent::create([
            'section_id' => 6,
            'code' => 'F4',
            'name' => 'Sistem pengurusan air limbah yang sempurna',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 4,
        ]);
        //tamat section F
        //section G
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G1',
            'name' => 'Maklumbalas pelanggan',
            'catatan' => null,
            'markah' => 5,
            'has_items' => false,
            'sort' => 1,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G2',
            'name' => 'Kemudahan tong sampah yang mencukupi, berpenutup, bersih dan berkarung',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 2,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G3',
            'name' => 'Bahan makanan dan bahan kimia hendaklah disimpan secara berasingan. Kedua-duanya mestilah berlabel',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 3,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G4',
            'name' => 'Penyediaan dan pengurusan stor yang baik (FIFO, kalis LILATI)',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 4,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G5',
            'name' => 'Amalan pengurusan sisa pepejal yang baik (pengasingan di punca)',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 5,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G6',
            'name' => 'Premis dan peralatan perlu disenggara dengan baik dan jadual pembersihan mestilah dipantau secara berterusan',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 6,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G7',
            'name' => 'Notis pemberitahuan kebersihan, amalan keselamatan, pendidikan kesihatan dan larangan merokok',
            'catatan' => null,
            'markah' => 1,
            'has_items' => false,
            'sort' => 7,
        ]);
        InspectionComponent::create([
            'section_id' => 7,
            'code' => 'G8',
            'name' => 'Kawalan dan keselematan di premis makanan',
            'catatan' => null,
            'markah' => null,
            'has_items' => true,
            'sort' => 8,
        ]);
        //tamat section G
    }
}
