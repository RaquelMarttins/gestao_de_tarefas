<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestador>
 */
class PrestadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'area' => $this->faker->randomElement(['Elétrica', 'Hidráulica', 'Limpeza']),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'observacoes' => $this->faker->sentence(),
        ];
    }
}
