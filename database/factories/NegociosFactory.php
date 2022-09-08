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
            'user_id'           => 1,
            'imagen'              => $this->faker->imageUrl(800,600),
            'nombre'            => $nombre = $this->faker->sentence(),
            'descripcion'       => $this->faker->text(2200),
            'slug'              => Str::slug($nombre),
            'categoria_id'      => 1,
            'tiponegocio_id'    => 1,
            'cliente_id'        => 1,
            'active'            => fake()->boolean(),
            'email'             => fake()->safeEmail(), 
            'convencional'      => fake()->phoneNumber(),
            'tigo'              => fake()->phoneNumber(),
            'claro'             => fake()->phoneNumber(),
            'facebook'          => fake()->companyEmail(),
            'whatsapp'          => fake()->companyEmail(),
            'instagram'         => fake()->companyEmail(),
            'telegram'          => fake()->companyEmail(),
            'twitter'           => fake()->companyEmail(),            
        ];
    }
}
