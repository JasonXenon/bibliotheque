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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('')->nullable();
            $table->string('ISBN', 20);
            $table->date('dateParution');
            $table->string('genre');
            $table->foreignId('aut_id');
            $table->integer('nbr_exemplaires');
            $table->integer('emprunts');
            $table->integer('disponible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
