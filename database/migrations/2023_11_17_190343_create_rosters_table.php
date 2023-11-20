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
        Schema::create('rosters', function (Blueprint $table) {
            $table->id('roster_id');
            $table->timestamp('date');
            $table->string('supervisor');
            $table->string('doctor');
            $table->string('caregiver1');
            $table->string('caregiver2');
            $table->string('caregiver3');
            $table->string('caregiver4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
