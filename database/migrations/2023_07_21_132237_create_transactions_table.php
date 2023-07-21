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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('invoice')->nullable();
            $table->string('userGame')->nullable();
            $table->string('userId')->nullable();
            $table->string('userServer')->nullable();
            $table->string('telp')->nullable(); 
            $table->enum('status', ['1', '2'. '3'])->nullable();
            $table->uuid('game_id');
            $table->foreign('game_id')->references('id')->on('games');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
