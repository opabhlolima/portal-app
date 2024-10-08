<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Negocio>
 */
class NegocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nome_fantasia' => $this->faker,
            'descricao',
            'contato',
            'latitude_longitude',
            'ativo',
            'id_tipo_negocio',
            'id_endereco'
        ];
    }
}
