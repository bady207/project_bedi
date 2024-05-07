<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas =[
            ['nama_pengguna'=>'Bady Ubaidillah'],
            ['nama_pengguna'=>'Muhammad Aditya'],
            ['nama_pengguna'=>'Fabio Naufal'],
            ['nama_pengguna'=>'Faraas Aufa'],
            ['nama_pengguna'=>'Andrian Riswanto'],
        ];
        DB::table('penggunas')->insert($penggunas);
    }
}
