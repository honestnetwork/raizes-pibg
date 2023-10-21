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
        Schema::create('estado_relacionamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_estado_relacionamento');
            $table->string('cor_estado_relacionamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_relacionamentos');
    }
};
