<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for($i=1; $i<=10; $i++){
            $data[] = [
                'penjualan_id' => $i,
                'user_id' => 3,
                'pembeli' => 'Pembeli '.$i,
                'penjualan_kode' => 'TRX00'.$i,
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}