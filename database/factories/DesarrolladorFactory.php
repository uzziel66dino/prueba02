<?php

namespace Database\Factories;

use App\Models\Desarrollador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Desarrollador>
 */
class DesarrolladorFactory extends Factory
{
    protected $model = Desarrollador::class;

    public function definition(): array
    {
        return [
            'matricula_desarrollador' => fake()->unique()->numerify('DEV-#####'),
            'nombres' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
        ];
    }
}