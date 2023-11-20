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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointmentID');
            $table->string('comment');
            $table->string('patientID');
            $table->string('Doctor');
            $table->string('Name');
            $table->string('Morning_med');
            $table->string('Afternoon_med');
            $table->string('Night_med');
            $table->timestamp('Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
