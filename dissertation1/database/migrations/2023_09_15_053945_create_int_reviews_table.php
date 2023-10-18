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
            $table->boolean('int_reviewa1');$table->text('int_reviewa1_comment');
            $table->boolean('int_reviewa2');$table->text('int_reviewa2_comment');
            $table->boolean('int_reviewa3');$table->text('int_reviewa3_comment');
            $table->boolean('int_reviewa4');$table->text('int_reviewa4_comment');
            $table->boolean('int_reviewa5');$table->text('int_reviewa5_comment');
            $table->boolean('int_reviewa6');$table->text('int_reviewa6_comment');
            $table->boolean('int_reviewa7');$table->text('int_reviewa7_comment');
            $table->boolean('int_reviewa8');$table->text('int_reviewa8_comment');

            $table->boolean('int_reviewb1_1');$table->text('int_reviewb1_1_comment');
            $table->boolean('int_reviewb1_2');$table->text('int_reviewb1_2_comment');
            $table->boolean('int_reviewb1_3');$table->text('int_reviewb1_3_comment');
            $table->boolean('int_reviewb2');$table->text('int_reviewb2_comment');
            $table->boolean('int_reviewb3_1');$table->text('int_reviewb3_1_comment');
            $table->boolean('int_reviewb3_2');$table->text('int_reviewb3_2_comment');

            $table->boolean('int_reviewc1');$table->text('int_reviewc1_comment');
            $table->boolean('int_reviewc2');$table->text('int_reviewc2_comment');
            $table->boolean('int_reviewc3');$table->text('int_reviewc3_comment');
            $table->boolean('int_reviewc4');$table->text('int_reviewc4_comment');

            $table->text('int_general_comment');
            $table->date('int_date_moderated');

            $table->text('int_assesor_response');
            $table->date('int_assessor_date');

            $table->boolean('int_director_confirmation');
            $table->boolean('int_review_status') ->default(false);;
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
