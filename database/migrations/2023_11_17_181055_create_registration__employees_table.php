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
        Schema::create('registration_employees', function (Blueprint $table) {
        /**
            'employee_id',
            'first_name',
            'last_name',
            'role',
            'approved'
        */
            $table->id('employee_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('role');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration__employees');
    }
};
