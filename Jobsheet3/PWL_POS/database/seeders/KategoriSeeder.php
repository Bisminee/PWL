<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id'=>1,'kategori_kode'=>'KTG01','kategori_nama'=>'Makanan','created_at'=>now(),'updated_at'=>now()],
            ['kategori_id'=>2,'kategori_kode'=>'KTG02','kategori_nama'=>'Minuman','created_at'=>now(),'updated_at'=>now()],
            ['kategori_id'=>3,'kategori_kode'=>'KTG03','kategori_nama'=>'Snack','created_at'=>now(),'updated_at'=>now()],
            ['kategori_id'=>4,'kategori_kode'=>'KTG04','kategori_nama'=>'ATK','created_at'=>now(),'updated_at'=>now()],
            ['kategori_id'=>5,'kategori_kode'=>'KTG05','kategori_nama'=>'Kebutuhan Harian','created_at'=>now(),'updated_at'=>now()],
        ];

        DB::table('m_kategori')->insert($data);
    }
}