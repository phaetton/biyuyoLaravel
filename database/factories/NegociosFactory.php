<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\negocios>
 */
class NegociosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $nombre = $this->faker->sentence(),
            'descripcion' => $this->faker->text(2200),
            'slug' => Str::slug($nombre),
            'categoria'=>$this->faker->word(),
            'tiponegocio'=>$this->faker->word(),
            'active'=>fake()->boolean(),
        ];
    }
}
