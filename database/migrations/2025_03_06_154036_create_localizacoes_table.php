<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('localizacoes', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->string('latitude');
            $table->string('longitude');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('localizacoes');
    }
};
