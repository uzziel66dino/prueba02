<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerfilLider extends Model
{
    use HasFactory;

    protected $table = 'perfiles_lideres';

    protected $fillable = [
        'lider_id',
        'biografia',
        'telefono',
        'perfil_github',
        'anos_experiencia',
    ];

    public function lider(): BelongsTo
    {
        return $this->belongsTo(Lider::class);
    }
}