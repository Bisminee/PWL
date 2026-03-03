<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;

        for($i=1; $i<=10; $i++){ // 10 transaksi
            for($j=1; $j<=3; $j++){ // 3 barang tiap transaksi
                $barang = rand(1,10);
                
                $harga = DB::table('m_barang')
                    ->where('barang_id',$barang)
                    ->value('harga_jual');

                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => $barang,
                    'harga' => $harga,
                    'jumlah' => rand(1,5),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}