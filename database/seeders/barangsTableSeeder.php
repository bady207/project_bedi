<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs =[
            ['nama_barang'=>'Minyak','harga_barang'=>'Rp.100.000','qty'=>'10'],
            ['nama_barang'=>'Beras','harga_barang'=>'Rp.20.000','qty'=>'20'],
            ['nama_barang'=>'Gula','harga_barang'=>'Rp.5.000','qty'=>'50'],
            ['nama_barang'=>'Cabe','harga_barang'=>'Rp.15.000','qty'=>'100'],
            ['nama_barang'=>'Kecap','harga_barang'=>'Rp.8.000','qty'=>'40'],
                
        ];
        DB::table('barangs')->insert($barangs);
    }
}
