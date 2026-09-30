<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Lider extends Model
{
    use HasFactory;

    protected $table = 'lideres';

    protected $fillable = [
        'dni_empleado',
        'nombres',
        'apellidos',
        'tecnologia_principal',
    ];

    public function perfil(): HasOne
    {
        return $this->hasOne(PerfilLider::class);
    }

    public function proyectos(): HasMany
    {
        return $this->hasMany(Proyecto::class);
    }
}