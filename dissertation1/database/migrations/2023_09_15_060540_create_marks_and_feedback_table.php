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
        Schema::create('marks_and_feedback', function (Blueprint $table) {
            $table->id();

            $table->integer('mnf_number_of_submissions');
            $table->integer('mnf_number_of_submissions_sample');
            $table->integer('mnf_number_of_failed_submissions');
            $table->boolean('mnf_industrial_action_affection');
            $table->boolean('mnf_covid19_affection');
            $table->integer('grade_0_19_number');
            $table->integer('grade_20_34_number');
            $table->integer('grade_35_39_number');
            $table->integer('grade_40_49_number');
            $table->integer('grade_50_59_number');
            $table->integer('grade_60_69_number');
            $table->integer('grade_70_79_number');
            $table->integer('grade_80_89_number');
            $table->integer('grade_90_number');
            $table->text('marker_commentary');

            $table->text('mnf_int_comment');
            $table->text('mnf_int_issue');

            $table->text('mnf_int_issue_solution');

            $table->text('mnf_ext_comment');


            $table->boolean('mnf_int_confirmation');
            $table->date('mnf_int_date');

            $table->boolean('mnf_ext_confirmation');
            $table->date('mnf_ext_date');

            $table->boolean('mnf_director_confirmation');

            $table->boolean('mnf_status') ->default(false);;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks_and_feedback');
    }
};
