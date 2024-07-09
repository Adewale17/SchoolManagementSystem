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
        Schema::create('student_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('classroom_id');
            $table->string('status');
            $table->integer('exam_score')->nullable();
            $table->date('date_of_exam')->nullable();
            $table->time('time_of_exam')->nullable();
            $table->foreignId('session_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_applications');
    }
};
