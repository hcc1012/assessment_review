<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessmentID');
            $table->unsignedBigInteger('tutorID');
            $table->unsignedBigInteger('moduleID');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('roleID');
            $table->timestamps();

            $table->foreign('assessmentID')->references('id')->on('assessments')->onDelete('cascade');
            $table->foreign('tutorID')->references('id')->on('tutors')->onDelete('cascade');
            $table->foreign('moduleID')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('roleID')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('cases');
    }
};
