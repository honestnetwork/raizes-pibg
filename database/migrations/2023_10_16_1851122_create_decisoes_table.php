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
        Schema::create('decisoes', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('id_pessoa');
            $table->foreign('id_pessoa')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_tipo_decisao');
            $table->foreign('id_tipo_decisao')->references('id')->on('tipo_decisoes')->onDelete('cascade');
            $table->date('date_decisao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decisoes');
    }
};
