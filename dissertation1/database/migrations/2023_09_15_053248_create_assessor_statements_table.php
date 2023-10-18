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
        Schema::create('assessor_statements', function (Blueprint $table) {
            $table->id();
            $table->boolean('assessor_statement1');
            $table->boolean('assessor_statement2_1');
            $table->boolean('assessor_statement2_2');
            $table->boolean('assessor_statement_status') ->default(false);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessor_statements');
    }
};
