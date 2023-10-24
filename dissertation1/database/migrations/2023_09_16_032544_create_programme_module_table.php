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
        Schema::create('programme_module', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('programmeID'); 
            $table->unsignedBigInteger('moduleID'); 

            $table->foreign('programmeID')->references('id')->on('programmes')->onDelete('cascade');
            $table->foreign('moduleID')->references('id')->on('modules')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programme_module');
    }
};
