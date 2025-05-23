<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'endereco',
        'responsavel',
        'contato',
    ];

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
