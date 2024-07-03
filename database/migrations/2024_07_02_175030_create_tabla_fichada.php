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
        Schema::create('tabla_fichada', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('area',50);
            $table->integer('numero_identificador');
            $table->string('nombre_archivo',50);
            $table->timestamp('fichada')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_fichada');
    }
};
