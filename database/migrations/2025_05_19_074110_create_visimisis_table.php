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
        Schema::create('visimisis', function (Blueprint $table) {
            $table->id();
            $table->text('vision');
            $table->text('mision');
            $table->text('image');
            $table->text('about_1');
            $table->text('about_2');
            $table->text('about_3');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visimisis');
    }
};