<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration_Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'first_name',
        'last_name',
        'role',
        'approved'
    ];
}
