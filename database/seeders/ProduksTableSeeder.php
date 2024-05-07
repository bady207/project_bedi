<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks =[
            ['nama_produk'=>'Vario','merek'=>'Honda','jumlah'=>1000],
            ['nama_produk'=>'Beat','merek'=>'Honda','jumlah'=>2000],
            ['nama_produk'=>'Shogun','merek'=>'Suzuki','jumlah'=>1500],
            ['nama_produk'=>'Supra','merek'=>'Honda','jumlah'=>2000],
            ['nama_produk'=>'Astrea','merek'=>'Honda','jumlah'=>300],
            ['nama_produk'=>'Rx King','merek'=>'Yamaha','jumlah'=>150],
            ['nama_produk'=>'Vxion','merek'=>'Yamaha','jumlah'=>1000],
            ['nama_produk'=>'Z1000','merek'=>'Kawasaki','jumlah'=>50],
            ['nama_produk'=>'R1','merek'=>'Yamaha','jumlah'=>250],
            ['nama_produk'=>'Genio','merek'=>'Honda','jumlah'=>5000],
            
        ];
        DB::table('produks')->insert($produks);
    }
}
