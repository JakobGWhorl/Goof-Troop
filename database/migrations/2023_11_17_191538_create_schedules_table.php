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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id('scheduleID');
            $table->timestamp('Date');
            $table->string('DoctorID');
            $table->string('Doctors_appointment');
            $table->string('caregivers_name');
            $table->string('Morning_med');
            $table->string('Afternoon_med');
            $table->string('Night_med');
            $table->string('Breakfast');
            $table->string('Lunch');
            $table->string('Dinner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
