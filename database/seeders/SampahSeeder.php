<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Waste;

class SampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $waste = [
            [
                'merk' => 'Coca-cola',
                'kategori' => 'Plastik Daur Ulang',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'The Coca-cola Company',
                'berat_sampah' => '5',
            ],
            [
                'merk' => 'Aqua',
                'kategori' => 'Plastik Sekali Pakai',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'Aqua Group',
                'berat_sampah' => '10',
            ],
            [
                'merk' => 'Asahimas',
                'kategori' => 'Kaca',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT Asahimas Flat Glass Tbk',
                'berat_sampah' => '2',
            ],
            [
                'merk' => 'Roman',
                'kategori' => 'Keramik',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT Roman Ceramic',
                'berat_sampah' => '3',
            ],
            [
                'merk' => 'Indomilk',
                'kategori' => 'Logam',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT Indolakto',
                'berat_sampah' => '4',
            ],
            [
                'merk' => 'ABC Alkaline',
                'kategori' => 'B3',
                'jenis_sampah' => 'B3',
                'produsen_sampah' => 'PT International Chemical Industry',
                'berat_sampah' => '6',
            ],
            [
                'merk' => 'Sinar Dunia (SiDu)',
                'kategori' => 'Kertas',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT Pabrik Kertas Tjiwi Kimia Tbk',
                'berat_sampah' => '10',
            ],
            [
                'merk' => 'Ban FDR',
                'kategori' => 'Karet',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT SRI',
                'berat_sampah' => '5',
            ],
            [
                'merk' => 'Sarung Wadimor',
                'kategori' => 'Tekstil',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT. SUKORINTEX',
                'berat_sampah' => '2',
            ],
            [
                'merk' => 'IKEA RAVAROR Meja Makan',
                'kategori' => 'Kayu',
                'jenis_sampah' => 'Organik',
                'produsen_sampah' => 'PT Rumah Mebel Nusantara',
                'berat_sampah' => '3',
            ],
            [
                'merk' => 'Lampu Pijar Philips',
                'kategori' => 'B3',
                'jenis_sampah' => 'B3',
                'produsen_sampah' => 'PT Dhia Adika Utama',
                'berat_sampah' => '6',
            ],
            [
                'merk' => 'Masker Sensi',
                'kategori' => 'B3',
                'jenis_sampah' => 'B3',
                'produsen_sampah' => 'PT. Arista Latindo',
                'berat_sampah' => '12',
            ],
            [
                'merk' => 'Baterai Hp Samsung',
                'kategori' => 'B3',
                'jenis_sampah' => 'B3',
                'produsen_sampah' => 'PT. Samsung Electronics Indonesia',
                'berat_sampah' => '9',
            ],
            [
                'merk' => 'Aki GS Astra',
                'kategori' => 'B3',
                'jenis_sampah' => 'B3',
                'produsen_sampah' => 'PT. GS Battery',
                'berat_sampah' => '5',
            ],
            [
                'merk' => 'Tamindo Glass',
                'kategori' => 'Kaca',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT.TAMINDO LAMIGLASS',
                'berat_sampah' => '3',
            ],
            [
                'merk' => 'Dunlop',
                'kategori' => 'Karet',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT.SUMI RUBBER INDONESIA',
                'berat_sampah' => '5',
            ],
            [
                'merk' => 'Teh Sisri',
                'kategori' => 'Plastik Sekali Pakai',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT.FORISA  NUSAPERDANA',
                'berat_sampah' => '2',
            ],
            [
                'merk' => 'Sprite',
                'kategori' => 'Plastik Daur Ulang',
                'jenis_sampah' => 'Anorganik',
                'produsen_sampah' => 'PT,COCA COLA',
                'berat_sampah' => '4',
            ],
            [
                'merk' => 'Baterai ABC',
                'kategori' => 'B3',
                'jenis_sampah' => 'B3',
                'produsen_sampah' => 'PT.INTERNATIONAL CHEMICAL INDUSTRY',
                'berat_sampah' => '1',
            ],
            [
                'merk' => 'Meja Lipat',
                'kategori' => 'Kayu',
                'jenis_sampah' => 'Organik',
                'produsen_sampah' => 'PT.INTERNATIONAL FURNITURE INDUSTRRIES',
                'berat_sampah' => '3',
            ],
            [
                'merk' => 'Keramik Lantai Motif',
                'kategori' => 'Keramik',
                'jenis_sampah' =>'Anorganik',
                'produsen_sampah' => 'PT.LUCKY INDAH KERAMIK',
                'berat_sampah' => '5',
            ],
            [
                'merk' => 'Buku Tulis',
                'kategori' => 'Kertas',
                'jenis_sampah' =>'Anorganik',
                'produsen_sampah' => 'PT.TJIWIKIMIA',
                'berat_sampah' => '4',
            ]
        ];

        foreach ($waste as $key => $value) {
            Waste::create($value);
        }
    }
}
