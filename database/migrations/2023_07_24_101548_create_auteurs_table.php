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
        Schema::create('auteurs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('')->unique();
            $table->string('email')->default('')->unique();
            $table->date('date_naiss');
            $table->string('nationalite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auteurs');
    }
};
