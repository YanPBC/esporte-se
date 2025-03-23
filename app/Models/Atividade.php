<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $fillable = ['espaco_id','esporte_id','data','hora_inicial','hora_final', 'vagas'];

    public function espaco(){
        return $this->belongsTo('App\Models\Espaco');
    }

    public function esporte(){
        return $this->belongsTo('App\Models\Esporte');
    }

}
