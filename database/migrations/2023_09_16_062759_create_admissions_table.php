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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('roll');
            $table->string('registration');
            $table->string('course');
            $table->string('birthday');
            $table->string('gender');
            $table->string('student_id');
            $table->string('father');
            $table->string('mother');
            $table->string('blood');
            $table->string('country');
            $table->string('which_country');
            $table->string('phone');
            $table->string('stu_email');
            $table->string('street');
            $table->string('street_2');
            $table->string('city');
            $table->string('state');
            $table->string('postal');
            $table->string('prs_f_name');
            $table->string('prs_l_name');
            $table->string('relationship');
            $table->string('prs_email');
            $table->string('prs_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
