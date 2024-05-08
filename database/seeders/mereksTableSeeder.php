<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks =[
            ['nama_merek'=>'Honda'],
            ['nama_merek'=>'yamaha'],
            ['nama_merek'=>'kawasaki'],   
        ];
        DB::table('mereks')->insert($mereks);
    }
}
