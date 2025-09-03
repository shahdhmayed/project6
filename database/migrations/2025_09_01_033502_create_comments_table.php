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
            $table->id('commentid');
            $table->timestamps();
            $table->string('content');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('postid');
            $table->foreign('userid')->references('userid')->on('users')->onDelete('cascade');
            $table->foreign('postid')->references('postid')->on('posts')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
