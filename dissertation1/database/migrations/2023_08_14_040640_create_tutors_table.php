<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
        {
            Schema::create('tutors', function (Blueprint $table) {
                $table->id();
                $table->string('username')->default('')->nullable()->unique(); 
                $table->string('surname')->default('')->nullable(); 
                $table->string('firstname')->default('')->nullable(); 
                $table->string('email')->default('')->nullable(); 
            });
        }



    public function down()
    {
        Schema::dropIfExists('tutors');
    }
};
