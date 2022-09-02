<?php

namespace Database\Factories;

//para una url amigable
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias>
 */
class CategoriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$nombre= $this->faker->sentence(),
            'descripcion'=>$this->faker->text(2200),
            'slug'=>Str::slug($nombre)
        ];
    }
}
