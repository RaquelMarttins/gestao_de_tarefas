<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Condominio>
 */
class CondominioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => 'Condominio ' . $this->faker->word(),
            'endereco' => $this->faker->address(),
            'responsavel' => $this->faker->name(),
            'contato' => $this->faker->phoneNumber(),
        ];
    }
}
