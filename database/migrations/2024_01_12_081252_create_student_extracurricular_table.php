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
        Schema::create('student_extracurricular', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict');
            $table->unsignedBigInteger('extracurricular_id');
            $table->foreign('extracurricular_id')->references('id')->on('extracurriculars')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_extracurricular');
    }
};
