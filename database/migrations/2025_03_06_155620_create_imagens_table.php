<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('bem_cultural_id')->constrained('bens_culturais');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};
