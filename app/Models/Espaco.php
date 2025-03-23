<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espaco extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'user_id',
        'cep',
        'bairro',
        'logradouro',
        'numero',
        'cidade',
        'estado',
        'tipo',
    ];

    /**
     * Get all of the comments for the Espaco
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atividades()
    {
        return $this->hasMany('App\Models\Atividade');
    }

}
