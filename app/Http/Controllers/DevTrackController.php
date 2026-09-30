<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Desarrollador;
use App\Models\Lider;
use App\Models\Proyecto;

class DevTrackController extends Controller
{
    public function index()
    {
        $lideres = Lider::with([
            'perfil',
            'proyectos.asignaciones.desarrollador'
        ])->get();

        $proyectos = Proyecto::with([
            'lider',
            'asignaciones.desarrollador'
        ])->get();

        $desarrolladores = Desarrollador::with([
            'asignaciones.proyecto.lider'
        ])->get();

        $asignaciones = Asignacion::with([
            'proyecto.lider',
            'desarrollador'
        ])->get();

        return view('devtrack.index', compact(
            'lideres',
            'proyectos',
            'desarrolladores',
            'asignaciones'
        ));
    }

    public function lideres()
    {
        $lideres = Lider::with([
            'perfil',
            'proyectos'
        ])->get();

        return view('devtrack.lideres', compact('lideres'));
    }

    public function proyectos()
    {
        $proyectos = Proyecto::with([
            'lider',
            'asignaciones.desarrollador'
        ])->get();

        return view('devtrack.proyectos', compact('proyectos'));
    }

    public function desarrolladores()
    {
        $desarrolladores = Desarrollador::with([
            'asignaciones.proyecto'
        ])->get();

        return view(
            'devtrack.desarrolladores',
            compact('desarrolladores')
        );
    }

    public function asignaciones()
    {
        $asignaciones = Asignacion::with([
            'proyecto.lider',
            'desarrollador'
        ])->get();

        return view(
            'devtrack.asignaciones',
            compact('asignaciones')
        );
    }
}