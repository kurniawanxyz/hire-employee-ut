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
        Schema::create('ojt_experience_students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('hired_student_id')->constrained()->cascadeOnDelete();
            $table->integer('preventive_maintenance');
            $table->integer('remove_and_install');
            $table->integer('machine_troubleshooting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ojt_experience_students');
    }
};
