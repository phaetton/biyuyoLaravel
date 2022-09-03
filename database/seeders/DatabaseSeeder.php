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
         \App\Models\Categorias::factory(80)->create();
         \App\Models\negocios::factory(80)->create();
         \App\Models\clientes::factory(20)->create();
         \App\Models\tiponegocios::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
