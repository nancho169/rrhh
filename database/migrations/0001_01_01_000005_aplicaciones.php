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
        //LA APLICIÓN SOLO HACE REFERENCIA A CIERTAS RUTAS HABILITAS A UN GRUPO DE VISTAS 
        Schema::create('aplicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('estado');
            $table->timestamp('creacion')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplicaciones');
    }
};
