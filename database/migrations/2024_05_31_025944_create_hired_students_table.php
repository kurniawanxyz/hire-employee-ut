;<?php

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
        Schema::create('hired_students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("photo")->default(asset('assets/admin/img/default_photo.png'));
            $table->string("name");
            $table->string('nis');
            $table->string('place_birth');
            $table->string('date_birth');
            $table->string('email');
            $table->string('school_origin');
            $table->string('major');
            $table->integer('age')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->enum('role', ['mechanic', 'operator']);
            $table->integer('batch');
            $table->boolean('hasRecruit')->default(false);
            $table->string('ojt_location');
            $table->foreignUuid("branch_id")->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hired_students');
    }
};
