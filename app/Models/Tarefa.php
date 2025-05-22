<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [
        'descricao',
        'condominio_id',
        'prestador_id',
        'data_manutencao',
        'prazo_meses',
        'repetir_em',
        'prioridade',
        'status',
        'observacoes',
    ];

    public function condominio()
    {
        return $this->belongsto(Condominio::class);
    }

    public function prestador()
    {
        return $this->belongsTo(Prestador::class);
    }
}
