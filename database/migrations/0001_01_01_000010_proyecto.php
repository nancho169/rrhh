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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_creacion')->nullable();
            $table->string('titulo',50);
            $table->string('extracto');
            $table->string('documento');
            $table->integer('anio');
            $table->string('tipo');
            $table->string('estado');
            $table->timestamp('fecha_ingreso')->nullable();
            /* Inlcuye el id de persona*/
            $table->unsignedBigInteger('personas_id');
            $table->foreign('personas_id')->references('id')->on('persona')->onDelete('cascade');
            $table->string('ruta_docx');
            $table->string('ruta_pdf');
            $table->integer('numero');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
