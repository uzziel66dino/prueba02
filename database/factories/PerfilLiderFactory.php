<?php

namespace Database\Factories;

use App\Models\Lider;
use App\Models\PerfilLider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PerfilLider>
 */
class PerfilLiderFactory extends Factory
{
    protected $model = PerfilLider::class;

    public function definition(): array
    {
        return [
            'lider_id' => Lider::factory(),
            'biografia' => fake()->paragraph(),
            'telefono' => fake()->numerify('7#######'),
            'perfil_github' => 'https://github.com/' . fake()->userName(),
            'anos_experiencia' => fake()->numberBetween(1, 15),
        ];
    }
}