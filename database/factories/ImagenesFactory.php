<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\imagenes>
 */
class ImagenesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imagen'              => $this->faker->imageUrl(),
            'descripcion'       => $this->faker->text(500),
            'negocio_id'      => 1,
        ];
    }
}
