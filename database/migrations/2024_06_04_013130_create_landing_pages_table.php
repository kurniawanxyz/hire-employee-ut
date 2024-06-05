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
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("hero_section_image_1")->nullable();
            $table->string("hero_section_image_2")->nullable();
            $table->string("hero_section_image_3")->nullable();
            $table->integer("manpower_channelled");
            $table->integer("client");
            $table->string("youtube")->nullable();
            $table->string("instagram")->nullable();
            $table->string("facebook")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("twitter")->nullable();
            $table->enum("operational_start_day", ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]);
            $table->enum("operational_end_day", ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]);
            $table->time("operational_start_time");
            $table->time("operational_end_time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
