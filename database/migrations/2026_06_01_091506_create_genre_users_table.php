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
        Schema::create('genre_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("genre");
            $table->string("user");
            $table->foreign('genre')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('user')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_users');
    }
};
