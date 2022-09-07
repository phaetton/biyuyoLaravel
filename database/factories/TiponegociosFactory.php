<?php

namespace Database\Factories;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tiponegocios>
 */
class TiponegociosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'       => 1,
            'nombre'        => $nombre = $this->faker->sentence(),
            'descripcion'   => $this->faker->text(2200),
            'slug'          => Str::slug($nombre),
        ];
    }
}
