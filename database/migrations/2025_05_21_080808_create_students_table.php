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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->foreignId('admission_pathway_id')->constrained()->cascadeOnDelete();
            $table->text('image');
            $table->foreignId('studyprogram_1_id')->constrained('study_programs')->cascadeOnDelete();
            $table->foreignId('studyprogram_2_id')->constrained('study_programs')->cascadeOnDelete();
            $table->timestamps();   
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};