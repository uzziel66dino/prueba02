<?php

namespace Database\Factories;

use App\Models\Lider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lider>
 */
class LiderFactory extends Factory
{
    protected $model = Lider::class;

    public function definition(): array
    {
        return [
            'dni_empleado' => fake()->unique()->numerify('########'),
            'nombres' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'tecnologia_principal' => fake()->randomElement([
                'Laravel',
                'React',
                'Vue',
                'Node.js',
                'Python',
            ]),
        ];
    }
}