<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->enum('assessment_type', ['quiz', 'exam', 'group assessment', 'individual assessment']);
            $table->integer('weighting');
            $table->enum('assessment_deliverable', ['presenatation', 'coding assignment', 'essay']);
            $table->string('other_deliverables');
            $table->date('issue_date');
            $table->date('submission_date');
            $table->date('date_submitted_for_moderation');
            $table->date('date_moderated');
            $table->date('date_form_received');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};