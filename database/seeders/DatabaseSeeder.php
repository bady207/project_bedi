<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        $this->call(ProduksTableSeeder::class);
        $this->call(PenggunasTableSeeder::class);
        $this->call(teleponsTableSeeder::class);
        $this->call(mereksTableSeeder::class);
        $this->call(prodaksTableSeeder::class);
        $this->call(penjualansTableSeeder::class);
        $this->call(barangsTableSeeder::class);
        $this->call(detail_penjualansTableSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
