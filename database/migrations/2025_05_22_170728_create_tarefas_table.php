<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->foreignId('condominio_id')->constrained('condominios');
            $table->foreignId('prestador_id')->nullable()->constrained('prestadores');
            $table->date('data_manutencao');
            $table->integer('prazo_meses');
            $table->integer('repetir_em')->nullable();
            $table->enum('prioridade', ['Alta', 'Média', 'Baixa']);
            $table->enum('status', ['Não iniciada', 'Em andamento', 'Em execução', 'Concluída']);
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
