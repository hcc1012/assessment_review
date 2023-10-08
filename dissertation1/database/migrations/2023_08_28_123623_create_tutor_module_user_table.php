<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tutor_module_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutorID');
            $table->unsignedBigInteger('module_code'); 
            $table->unsignedBigInteger('user_id'); 

            $table->foreign('tutorID')->references('id')->on('tutors')->onDelete('cascade');
            $table->foreign('module_code')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tutor_module_user');
    }
};
