<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bens_culturais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->string('processo');
            $table->string('proprietario');
            $table->text('historico');
            $table->boolean('ativo')->default(true);
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('localizacao_id')->constrained('localizacoes');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bens_culturais');
    }
};
