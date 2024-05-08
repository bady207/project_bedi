<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penjualans =[
            ['nama_pelanggan'=>'Bady Ubaidillah','sub_total'=>'Rp.100.000','diskon'=>'30%','grand_total'=>'Rp.70.000'],
            ['nama_pelanggan'=>'Muhammad Aditya','sub_total'=>'Rp.150.000','diskon'=>'50%','grand_total'=>'Rp.75.000'],
            ['nama_pelanggan'=>'Andrian Riswanto','sub_total'=>'Rp.200.000','diskon'=>'50%','grand_total'=>'Rp.100.000'],
            ['nama_pelanggan'=>'Farras Aufa','sub_total'=>'Rp.1.000.000','diskon'=>'30%','grand_total'=>'Rp.700.000'],
            ['nama_pelanggan'=>'Rafly rosyidin','sub_total'=>'Rp.500.000','diskon'=>'50%','grand_total'=>'Rp.250.000'],
           
        ];
        DB::table('penjualans')->insert($penjualans);
    }
}
