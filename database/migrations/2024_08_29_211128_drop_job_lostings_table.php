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
        Schema::dropIfExists('job_lostings');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('job_lostings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('salary');
            $table->text('description');
            $table->timestamps();
        });
    }
};
