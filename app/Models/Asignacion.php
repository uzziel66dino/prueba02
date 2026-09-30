<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asignacion extends Model
{
    use HasFactory;

    protected $table = 'asignaciones';

    protected $fillable = [
        'proyecto_id',
        'desarrollador_id',
        'fecha_asignacion',
        'puntuacion_rendimiento',
        'estado',
    ];

    protected $casts = [
        'fecha_asignacion' => 'date',
        'puntuacion_rendimiento' => 'decimal:2',
    ];

    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function desarrollador(): BelongsTo
    {
        return $this->belongsTo(Desarrollador::class);
    }
}