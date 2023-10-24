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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('capacité');
            $table->string('type');
            $table->string('lieu');
            $table->string('photo');
            $table->boolean('disponibilite');
            $table->timestamps();
        });
    }
    /* nom, capacité, type, lieu, photo,
disponibilite */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};
