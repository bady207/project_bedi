<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodaks =[
            ['nama_prodak'=>'Beat','jumlah'=>10000,'merek_id'=> 1],
            ['nama_prodak'=>'Honda','jumlah'=>20000,'merek_id'=> 1],
            ['nama_prodak'=>'Vixion','jumlah'=>1000,'merek_id'=> 2],
            ['nama_prodak'=>'R6','jumlah'=>100,'merek_id'=> 2],
            ['nama_prodak'=>'ZX25r','jumlah'=>8600,'merek_id'=> 3],
            ['nama_prodak'=>'H2','jumlah'=>100,'merek_id'=> 3],
        ];
        DB::table('prodaks')->insert($prodaks);
    }
}
