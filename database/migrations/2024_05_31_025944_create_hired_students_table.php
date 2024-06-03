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
        Schema::create('hired_students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("photo")->default(asset('assets/admin/img/default_photo.png'));
            $table->string("name");
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->longText('experience');
            $table->enum('role', ['mechanic', 'operator']);
            $table->boolean('hasRecruit')->default(false);
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
