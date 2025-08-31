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
        Schema::create('tag_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tagid');
            $table->unsignedBigInteger('postid');
             $table->foreign('postid')->references('postid')->on('posts')->onDelete('cascade');
              $table->foreign('tagid')->references('tagid')->on('tags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_post');
    }
};
