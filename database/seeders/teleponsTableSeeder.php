<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons =[
            ['no_telepon'=>'085853506329','pengguna_id'=> 1],
            ['no_telepon'=>'085796560318','pengguna_id'=> 2],
            ['no_telepon'=>'081931253987','pengguna_id'=> 3],
            ['no_telepon'=>'081532779277','pengguna_id'=> 4],
            ['no_telepon'=>'081572834255','pengguna_id'=> 5],
            
        ];
        DB::table('telepons')->insert($telepons);
    }
}
