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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('school_name');
            $table->string('job_title');
            $table->string('street');
            $table->string('street_2');
            $table->string('city');
            $table->string('region');
            $table->string('postal');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->string('course_name');
            $table->string('course_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
