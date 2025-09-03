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
        Schema::create('post_comment', function (Blueprint $table) {
        $table->id();                 
        $table->unsignedBigInteger('postid'); 
        $table->string('name');
        $table->string('email');
        $table->string('website')->nullable();
        $table->text('comment');
        $table->timestamps();
        $table->foreign('postid')->references('postid')->on('posts')->onDelete('cascade');
    });
}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comment');
    }
};
