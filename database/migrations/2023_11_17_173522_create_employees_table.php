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
        Schema::create('employees', function (Blueprint $table) {
        /*
            'employee_id',
            'first_name',
            'last_name',
            'role',
            'email',
            'phone',
            'password',
            'dob',
            'salary'
        */
            $table->id('employee_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('role');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->date('dob');
            $table->decimal('salary',11,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
