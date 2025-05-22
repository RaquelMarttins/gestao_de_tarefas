<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarefa>
 */
class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descricao' => $this->faker->sentence(),
            'condominio_id' => \App\Models\Condominio::factory(),
            'prestador_id' => \App\Models\Prestador::factory(),
            'data_manutencao' => $this->faker->date(),
            'prazo_meses' => $this->faker->numberBetween(1, 6),
            'repetir_em' => $this->faker->optional()->numberBetween(1, 12),
            'prioridade' => $this->faker->randomElement(['Alta', 'Média', 'Baixa']),
            'status' => $this->faker->randomElement(['Não iniciada', 'Em andamento', 'Em execução', 'Concluída']),
            'observacoes' => $this->faker->optional()->sentence(),
        ];
    }
}
