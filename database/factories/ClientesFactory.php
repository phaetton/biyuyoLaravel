<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'            => fake()->name(),
            'email'             => fake()->safeEmail(),
            'email_verified_at' => now(),
            'convencional'      => fake()->phoneNumber(),
            'tigo'              => fake()->phoneNumber(),
            'claro'             => fake()->phoneNumber(),
            'facebook'          => fake()->companyEmail(),
            'whatsapp'          => fake()->companyEmail(),
            'instagram'         => fake()->companyEmail(),
            'telegram'          => fake()->companyEmail(),
            'twitter'           => fake()->companyEmail(),
            'active'            => fake()->boolean(),
        ];
    }
}
