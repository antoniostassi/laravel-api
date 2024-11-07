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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->text('description')->nullable();
            $table->string('picture', 1024)->nullable();
            $table->smallInteger('weight')->nullable()->unsigned(); // KG
            $table->smallInteger('height')->nullable()->unsigned(); // CM
            $table->string('sex', 1); // M / F / U

            // RELATIONS
            // Generation of Pokémon ( 1 To Many )
            // Types of Pokémon ( Many to Many )
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
