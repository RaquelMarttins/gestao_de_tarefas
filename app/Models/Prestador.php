<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestador extends Model
{
    use HasFactory;

    protected $table = 'prestadores';
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
