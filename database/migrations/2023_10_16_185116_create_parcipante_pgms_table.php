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
        Schema::create('parcipante_pgms', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pgm');
            $table->foreign('id_pgm')->references('id')->on('pgms')->onDelete('cascade');
            $table->foreignId('id_participante')->references('id')->on('pessoas')->onDelete('cascade')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcipante_pgms');
    }
};
