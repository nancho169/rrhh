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
        Schema::create('proyecto_aprticipacion', function (Blueprint $table) {
            $table->id();
            /* Inlcuye el id de persona*/
            $table->unsignedBigInteger('personas_id');
            $table->foreign('personas_id')->references('id')->on('persona')->onDelete('cascade');
            /* Inlcuye el id de proyecto*/
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyecto')->onDelete('cascade');
            
        
            

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
