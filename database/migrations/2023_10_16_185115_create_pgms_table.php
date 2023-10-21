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
        Schema::create('pgms', function (Blueprint $table) {
            $table->id();
            $table->string('nome_pgm');
            $table->unsignedBigInteger('id_supervisao');
            $table->foreign('id_supervisao')->references('id')->on('supervisao_pgms')->onDelete('cascade');
            $table->unsignedBigInteger('id_lider');
            $table->foreign('id_lider')->references('id')->on('pessoas')->onDelete('cascade');
            $table->unsignedBigInteger('id_bairro');
            $table->foreign('id_bairro')->references('id')->on('bairros')->onDelete('cascade');
            $table->unsignedBigInteger('id_estado_pgm');
            $table->foreign('id_estado_pgm')->references('id')->on('estado_pgms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pgms');
    }
};
