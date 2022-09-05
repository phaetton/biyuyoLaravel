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
        // cantidad de elementos falsos a crearse según el modelo
         \App\Models\User::factory()->create();
         \App\Models\Categorias::factory(40)->create();
         \App\Models\negocios::factory(300)->create();
         \App\Models\clientes::factory(50)->create();
         \App\Models\tiponegocios::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
