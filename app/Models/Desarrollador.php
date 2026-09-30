<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desarrollador extends Model
{
    use HasFactory;

    protected $table = 'desarrolladores';

    protected $fillable = [
        'matricula_desarrollador',
        'nombres',
        'apellidos',
    ];

    public function asignaciones(): HasMany
    {
        return $this->hasMany(Asignacion::class);
    }
}