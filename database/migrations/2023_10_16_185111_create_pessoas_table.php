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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_pessoa');
            $table->string('imagem')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('endereco')->nullable();
            $table->unsignedBigInteger('id_tipo_pessoa');
            $table->foreign('id_tipo_pessoa')->references('id')->on('tipo_pessoas')->onDelete('cascade');
            $table->unsignedBigInteger('id_situacao');
            $table->foreign('id_situacao')->references('id')->on('situacao_pessoas')->onDelete('cascade');
            $table->unsignedBigInteger('id_bairro');
            $table->foreign('id_bairro')->references('id')->on('bairros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
