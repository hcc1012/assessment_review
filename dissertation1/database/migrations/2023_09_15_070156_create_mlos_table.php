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
        Schema::create('mlos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moduleID'); 
            $table->unsignedBigInteger('assessmentID'); 
            $table->integer('mlo_number')->nullable(); 
            $table->text('mlo_description')->nullable(); 

            $table->foreign('moduleID')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('assessmentID')->references('id')->on('assessments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mlos');
    }
};
