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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('estado');
            $table->timestamp('fecha_creacion')->nullable();
            /* Incluye el id de usuario*/
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
             /* Incluye el id de permiso*/
             $table->unsignedBigInteger('permiso_id');
             $table->foreign('permiso_id')->references('id')->on('permisos')->onDelete('cascade');
            /* Incluye el id de aplicaciones*/
            $table->unsignedBigInteger('aplicaciones_id');
            $table->foreign('aplicaciones_id')->references('id')->on('aplicaciones')->onDelete('cascade');
           
            //VERIFICAR QUE SE RESPETE LA CORRESPONDENCIA DE UN USUARIO POR GRUPO
            //EVALUAR LA POSIBILIDAD DE QUE UN USUARIO PERTENEZCA A VARIOS GRUPOS - LIMITAR CANTIDAD 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
