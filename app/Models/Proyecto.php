<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'lider_id',
        'codigo',
        'titulo',
        'presupuesto',
        'fecha_entrega',
    ];

    protected $casts = [
        'presupuesto' => 'decimal:2',
        'fecha_entrega' => 'date',
    ];

    public function lider(): BelongsTo
    {
        return $this->belongsTo(Lider::class);
    }

    public function asignaciones(): HasMany
    {
        return $this->hasMany(Asignacion::class);
    }
}