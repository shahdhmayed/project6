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
            $table->id('postid');
            $table->timestamps();
            $table->string('content');
            $table->string('title');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('commentid');
            $table->foreign('userid')->references('userid')->on('users')->onDelete('cascade');
            $table->foreign('commentid')->references('commentid')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
