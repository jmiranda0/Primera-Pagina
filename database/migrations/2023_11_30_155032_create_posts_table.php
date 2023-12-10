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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->unsignedBigInteger('authors_id');
            $table->unsignedBigInteger('classifications_id');
            $table->timestamps();
            $table->foreign('authors_id')->references('id')->on('authors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classifications_id')->references('id')->on('classifications')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_posts');
    }
};
