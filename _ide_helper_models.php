<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nome
 * @property string $endereco
 * @property string $responsavel
 * @property string $contato
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tarefa> $tarefas
 * @property-read int|null $tarefas_count
 * @method static \Database\Factories\CondominioFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereContato($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereEndereco($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereResponsavel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Condominio whereUpdatedAt($value)
 */
	class Condominio extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nome
 * @property string $area
 * @property string $telefone
 * @property string $email
 * @property string|null $observacoes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tarefa> $tarefas
 * @property-read int|null $tarefas_count
 * @method static \Database\Factories\PrestadorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereObservacoes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prestador whereUpdatedAt($value)
 */
	class Prestador extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $descricao
 * @property int $condominio_id
 * @property int|null $prestador_id
 * @property string $data_manutencao
 * @property int $prazo_meses
 * @property int|null $repetir_em
 * @property string $prioridade
 * @property string $status
 * @property string|null $observacoes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Condominio $condominio
 * @property-read \App\Models\Prestador|null $prestador
 * @method static \Database\Factories\TarefaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereCondominioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereDataManutencao($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereObservacoes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa wherePrazoMeses($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa wherePrestadorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa wherePrioridade($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereRepetirEm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tarefa whereUpdatedAt($value)
 */
	class Tarefa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $type_acess
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTypeAcess($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

