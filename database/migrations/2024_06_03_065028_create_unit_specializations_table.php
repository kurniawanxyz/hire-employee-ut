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
        Schema::create('unit_specializations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('hired_student_id')->constrained()->cascadeOnDelete();
            $table->string('ojt_location');
            $table->string('rank_1')->nullable();
            $table->string('rank_2')->nullable();
            $table->string('rank_3')->nullable();
            $table->string('rank_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_specializations');
    }
};
