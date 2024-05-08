<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detail_penjualansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_penjualans =[
            ['penjualan_id'=> 1,'barang_id'=> 1,'jumlah'=>'100','total_harga'=>'Rp.10.000.000'],
            ['penjualan_id'=> 1,'barang_id'=> 1,'jumlah'=>'150','total_harga'=>'Rp.20.000.000'],
            ['penjualan_id'=> 2,'barang_id'=> 2,'jumlah'=>'60','total_harga'=>'Rp.900.000'],
            ['penjualan_id'=> 2,'barang_id'=> 2,'jumlah'=>'80','total_harga'=>'Rp.400.000'],
            ['penjualan_id'=> 3,'barang_id'=> 3,'jumlah'=>'90','total_harga'=>'Rp.5.000.000'],
            ['penjualan_id'=> 3,'barang_id'=> 3,'jumlah'=>'150','total_harga'=>'Rp.2.000.000'],
            ['penjualan_id'=> 4,'barang_id'=> 4,'jumlah'=>'200','total_harga'=>'Rp.500.000'],
            ['penjualan_id'=> 4,'barang_id'=> 4,'jumlah'=>'60','total_harga'=>'Rp.250.000'],
            ['penjualan_id'=> 5,'barang_id'=> 5,'jumlah'=>'45','total_harga'=>'Rp.9.000.000'],
            ['penjualan_id'=> 5,'barang_id'=> 5,'jumlah'=>'40','total_harga'=>'Rp.10.000.000'],
           
                
        ];
        DB::table('detail_penjualans')->insert($detail_penjualans);
    }
}
