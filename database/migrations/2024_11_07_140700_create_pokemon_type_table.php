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
        Schema::create('pokemon_type', function (Blueprint $table) {

            $table->foreignId('pokemon_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->primary([ // Questo serve ad evitare che si crei una coppia identica di chiavi.
                'pokemon_id',
                'type_id'
            ]); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_type');
    }
};
