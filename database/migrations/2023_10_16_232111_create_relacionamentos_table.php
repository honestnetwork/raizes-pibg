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
        Schema::create('relacionamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_discipulo');
            $table->foreign('id_discipulo')->references('id')->on('discipulados')->onDelete('cascade');
            $table->unsignedBigInteger('id_mestre');
            $table->foreign('id_mestre')->references('id')->on('pessoas')->onDelete('cascade');
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->unsignedBigInteger('id_estado_rd');
            $table->foreign('id_estado_rd')->references('id')->on('estado_relacionamentos')->onDelete('cascade');
            $table->unsignedBigInteger('id_livro');
            $table->foreign('id_livro')->references('id')->on('livros')->onDelete('cascade');
            $table->unsignedBigInteger('id_tipo_rd');
            $table->foreign('id_tipo_rd')->references('id')->on('tipo_relacionamentos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relacionamentos');
    }
};
