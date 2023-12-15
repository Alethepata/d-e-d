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
        Schema::create('character_skill', function (Blueprint $table) {
            $table->unsignedBigInteger('character_id')->nullable();
            $table->unsignedBigInteger('skill_id')->nullable();
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_skill');
    }
};
