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
        Schema::table('patients', function (Blueprint $table) {
            /**
                'patient_id',
                'first_name',
                'last_name',
                'email',
                'phone_number',
                'password',
                'dob',
                'family_code',
                'emergency_contact',
                'emergency_contact_relationship',
                'role',
                'group',
                'admission_date'
            */
           
            //  $table->id('patient_id');
            // $table->string('first_name');
            // $table->string('last_name');
            // $table->string('email');
            // $table->string('phone_number');
            // $table->string('password');
            // $table->date('dob');
            $table->integer('family_code')->nullable()->default(null)->change();
            // $table->string('emergency_contact');
            // $table->string('emergency_contact_relationship');
            // $table->string('role');
            $table->integer('group')->nullable()->default(null)->change();
            // $table->date('admission_date');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
