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
        Schema::create('int_reviews', function (Blueprint $table) {
            $table->id();
            $table->boolean('int_reviewa1');$table->string('int_reviewa1_comment');
            $table->boolean('int_reviewa2');$table->string('int_reviewa2_comment');
            $table->boolean('int_reviewa3');$table->string('int_reviewa3_comment');
            $table->boolean('int_reviewa4');$table->string('int_reviewa4_comment');
            $table->boolean('int_reviewa5');$table->string('int_reviewa5_comment');
            $table->boolean('int_reviewa6');$table->string('int_reviewa6_comment');
            $table->boolean('int_reviewa7');$table->string('int_reviewa7_comment');
            $table->boolean('int_reviewa8');$table->string('int_reviewa8_comment');

            $table->boolean('int_reviewb1_1');$table->string('int_reviewb1_1_comment');
            $table->boolean('int_reviewb1_2');$table->string('int_reviewb1_2_comment');
            $table->boolean('int_reviewb1_3');$table->string('int_reviewb1_3_comment');
            $table->boolean('int_reviewb2');$table->string('int_reviewb2_comment');
            $table->boolean('int_reviewb3_1');$table->string('int_reviewb3_1_comment');
            $table->boolean('int_reviewb3_2');$table->string('int_reviewb3_2_comment');

            $table->boolean('int_reviewc1');$table->string('int_reviewc1_comment');
            $table->boolean('int_reviewc2');$table->string('int_reviewc2_comment');
            $table->boolean('int_reviewc3');$table->string('int_reviewc3_comment');
            $table->boolean('int_reviewc4');$table->string('int_reviewc4_comment');

            $table->string('int_general_comment');
            $table->date('int_date_moderated');

            $table->string('int_assesor_response');
            $table->date('int_assessor_date');

            $table->boolean('int_director_confirmation');
            $table->date('int_director_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('int_reviews');
    }
};
