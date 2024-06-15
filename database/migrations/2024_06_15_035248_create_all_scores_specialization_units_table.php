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
        Schema::create('all_scores_specialization_units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('unit_specialization_id')->constrained()->cascadeOnDelete();
            $table->integer('ps_scania')->nullable();
            $table->integer('ri_scania')->nullable();
            $table->integer('ts_scania')->nullable();
            $table->integer('unit_scania')->nullable();
            $table->integer('ps_ud')->nullable();
            $table->integer('ri_ud')->nullable();
            $table->integer('ts_ud')->nullable();
            $table->integer('unit_ud')->nullable();
            $table->integer('ps_hd')->nullable();
            $table->integer('ri_hd')->nullable();
            $table->integer('ts_hd')->nullable();
            $table->integer('unit_hd')->nullable();
            $table->integer('ps_pc_small')->nullable();
            $table->integer('ri_pc_small')->nullable();
            $table->integer('ts_pc_small')->nullable();
            $table->integer('unit_pc_small')->nullable();
            $table->integer('ps_pc_big')->nullable();
            $table->integer('ri_pc_big')->nullable();
            $table->integer('ts_pc_big')->nullable();
            $table->integer('unit_pc_big')->nullable();
            $table->integer('ps_sbd')->nullable();
            $table->integer('ri_sbd')->nullable();
            $table->integer('ts_sbd')->nullable();
            $table->integer('unit_sbd')->nullable();
            $table->integer('ps_grader')->nullable();
            $table->integer('ri_grader')->nullable();
            $table->integer('ts_grader')->nullable();
            $table->integer('unit_grader')->nullable();
            $table->integer('ps_bulldozer_small')->nullable();
            $table->integer('ri_bulldozer_small')->nullable();
            $table->integer('ts_bulldozer_small')->nullable();
            $table->integer('unit_bulldozer_small')->nullable();
            $table->integer('ps_bulldozer_big')->nullable();
            $table->integer('ri_bulldozer_big')->nullable();
            $table->integer('ts_bulldozer_big')->nullable();
            $table->integer('unit_bulldozer_big')->nullable();
            $table->integer('ps_bomag')->nullable();
            $table->integer('ri_bomag')->nullable();
            $table->integer('ts_bomag')->nullable();
            $table->integer('unit_bomag')->nullable();
            $table->integer('ps_tadano')->nullable();
            $table->integer('ri_tadano')->nullable();
            $table->integer('ts_tadano')->nullable();
            $table->integer('unit_tadano')->nullable();
            $table->integer('ps_wheel_loader')->nullable();
            $table->integer('ri_wheel_loader')->nullable();
            $table->integer('ts_wheel_loader')->nullable();
            $table->integer('unit_wheel_loader')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_scores_specialization_units');
    }
};
