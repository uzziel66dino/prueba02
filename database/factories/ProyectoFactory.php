<?php

namespace Database\Factories;

use App\Models\Lider;
use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proyecto>
 */
class ProyectoFactory extends Factory
{
    protected $model = Proyecto::class;

    public function definition(): array
    {
        return [
            'lider_id' => Lider::factory(),
            'codigo' => 'PROY-' . fake()->unique()->numerify('####'),
            'titulo' => fake()->sentence(4),
            'presupuesto' => fake()->randomFloat(2, 5000, 100000),
            'fecha_entrega' => fake()->dateTimeBetween('now', '+1 year'),
        ];
    }
}