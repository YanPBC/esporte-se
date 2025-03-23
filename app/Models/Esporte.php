<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esporte extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    /**
     * Get all of the comments for the Esporte
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atividades()
    {
        return $this->hasMany('App\Models\Atividade');
    }
}
