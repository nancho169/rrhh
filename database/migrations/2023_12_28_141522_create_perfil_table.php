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
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
             //Agregado id acccesos 
             /* Por cada tipo de acceso hay un perfil que los agrupa*/
             $table->unsignedBigInteger('accesos_id');
             $table->foreign('accesos_id')->references('id')->on('accesos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
