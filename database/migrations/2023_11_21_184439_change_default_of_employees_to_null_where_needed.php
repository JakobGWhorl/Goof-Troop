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
        Schema::table('employees', function (Blueprint $table) {
            // $table->id('employee_id');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('role');
            // $table->string('email');
            // $table->string('phone');
            // $table->string('password');
            // $table->date('dob');
            $table->decimal('salary',11,2)->default(0.00)->change();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
};
