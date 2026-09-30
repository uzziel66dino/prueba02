<?php

namespace Database\Seeders;

use App\Models\Asignacion;
use App\Models\Desarrollador;
use App\Models\Lider;
use App\Models\PerfilLider;
use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear 5 líderes
        $lideres = Lider::factory(5)->create();

        // Crear un perfil para cada líder
        foreach ($lideres as $lider) {
            PerfilLider::factory()->create([
                'lider_id' => $lider->id,
            ]);

            // Crear 2 proyectos para cada líder
            Proyecto::factory(2)->create([
                'lider_id' => $lider->id,
            ]);
        }

        // Crear 15 desarrolladores
        $desarrolladores = Desarrollador::factory(15)->create();

        // Obtener todos los proyectos creados
        $proyectos = Proyecto::all();

        // Crear asignaciones
        foreach ($proyectos as $proyecto) {
            $cantidad = rand(1, 3);

            $seleccionados = $desarrolladores
                ->random($cantidad);

            foreach ($seleccionados as $desarrollador) {
                Asignacion::factory()->create([
                    'proyecto_id' => $proyecto->id,
                    'desarrollador_id' => $desarrollador->id,
                ]);
            }
        }
    }
}