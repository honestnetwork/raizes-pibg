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
        Schema::create('discipulados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pessoa_dispulada');
            $table->foreign('id_pessoa_dispulada')->references('id')->on('pessoas')->onDelete('cascade')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discipulados');
    }
};
