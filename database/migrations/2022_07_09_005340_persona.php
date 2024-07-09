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
        
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('legajo');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('img');
            $table->boolean('activo');
            $table->integer('cuil')->nullable();
            $table->integer('dni')->nullable();
            $table->time('fecha_nac')->nullable();
            $table->string('telefono',50);
            $table->string('direccion');
            $table->rememberToken();
            $table->timestamps();
            /* Clave foranea de organigrama */
            $table->unsignedBigInteger('organigrama_id');
            $table->foreign('organigrama_id')->references('id')->on('organigrama')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
        
    }
};
