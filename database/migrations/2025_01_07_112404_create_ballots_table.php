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
        Schema::create('ballots', function (Blueprint $table) {
            $table->id();
            $table->string('president')->nullable();
            $table->string('vice_president')->nullable();
            $table->string('secretary')->nullable();
            $table->string('treasurer')->nullable();
            $table->string('pio')->nullable();
            $table->string('peace_officer_1')->nullable();
            $table->string('peace_officer_2')->nullable();
            $table->string('auditor')->nullable();
            $table->string('business_manager_1')->nullable();
            $table->string('business_manager_2')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ballots');
    }
};
