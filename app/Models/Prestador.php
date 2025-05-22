<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    //
    protected $fillable = [
        'nome',
        'area',
        'telefone',
        'email',
        'observacoes',
    ];

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
