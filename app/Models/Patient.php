<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     *  first_name,
     *  last name,
     *  email,
     *  patient id (PK) ,
     * phone number,
     * password,
     * date of birth,
     * family code,
     * emergency contact,
     * relation to emergency contact,
     * role,
     * Group,
     * Admission Date
     */
    use HasFactory;
    protected $fillable = [
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
    ];

}
