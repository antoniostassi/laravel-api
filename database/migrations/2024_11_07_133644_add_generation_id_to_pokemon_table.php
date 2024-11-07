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
        Schema::table('pokemon', function (Blueprint $table) {
            //
            $table->foreignId('generation_id')->nullable()->constrained()->onUpdate('cascade')->onDelete(null); // Dalla docs

            /* $table->unsignedBigInteger('generation_id');
            $table->foreign('generation_id')
            ->references('id')
            ->on('generations') */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pokemon', function (Blueprint $table) {
            // How to delete column
            if (Schema::hasColumn('pokemon', 'generation_id')) {
                $table->dropForeign(['generation_id']); // Prima rimuovo il vincolo di foreign key (altrimenti non posso droppare la colonna)
                $table->dropColumn('generation_id'); // Poi cancello la colonna generation_id
            }
        });
    }
};
