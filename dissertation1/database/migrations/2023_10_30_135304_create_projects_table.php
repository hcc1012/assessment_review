<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programmeID');
            $table->unsignedBigInteger('moduleID');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('roleID');

            $table->foreign('programmeID')->references('id')->on('programmes')->onDelete('cascade');
            $table->foreign('moduleID')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('roleID')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('projects');
    }
};
