<?php

namespace Database\Factories;

use App\Models\Asignacion;
use App\Models\Desarrollador;
use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Asignacion>
 */
class AsignacionFactory extends Factory
{
    protected $model = Asignacion::class;

    public function definition(): array
    {
        return [
            'proyecto_id' => Proyecto::factory(),
            'desarrollador_id' => Desarrollador::factory(),
            'fecha_asignacion' => fake()->dateTimeBetween('-6 months', 'now'),
            'puntuacion_rendimiento' => fake()->randomFloat(2, 50, 100),
            'estado' => fake()->randomElement([
                'activo',
                'aprobado',
                'reprobado',
            ]),
        ];
    }
}