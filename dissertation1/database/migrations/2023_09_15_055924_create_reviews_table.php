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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('int_reviewID'); 
            $table->unsignedBigInteger('ext_reviewID'); 

            $table->foreign('int_reviewID')->references('id')->on('int_reviews')->onDelete('cascade');
            $table->foreign('ext_reviewID')->references('id')->on('ext_reviews')->onDelete('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
