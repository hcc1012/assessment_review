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
        Schema::create('ext_reviews', function (Blueprint $table) {
            $table->id();
            $table->boolean('ext_review1');$table->string('ext_review1_comment');
            $table->boolean('ext_review2');$table->string('ext_review2_comment');
            $table->boolean('ext_review3');$table->string('ext_review3_comment');
            $table->string('ext_general_comment');
            $table->boolean('ext_review4');
            $table->date('ext_date_moderated');

            $table->string('ext_assesor_response');
            $table->date('ext_assessor_date');

            $table->boolean('ext_director_confirmation');
            $table->date('ext_director_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ext_reviews');
    }
};
