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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedbigInteger('post_id');
            $table->string('comment');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Relasi ke table users
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade'); // Relasi ke table posts
        });
    }

    /**
     * Reverse the migrations.phph
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
