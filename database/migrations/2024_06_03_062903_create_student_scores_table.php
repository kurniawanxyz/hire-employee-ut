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
        Schema::create('student_scores', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('hired_student_id')->constrained()->cascadeOnDelete();
            $table->integer('avr_theory');
            $table->integer('avr_practice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_scores');
    }
};
