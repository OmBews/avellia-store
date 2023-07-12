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
        Schema::create('nominals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('games_id')->nullable();
            $table->foreign('games_id')->references('id')->on('games');
            $table->string('thumbnail')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominals');
    }
};
