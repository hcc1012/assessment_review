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
            $table->string('module_code')->nullable(); 
            $table->integer('mlo_number')->nullable(); 
            $table->string('mlo_description')->nullable(); 
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
