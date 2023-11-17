<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration_Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'first_name',
        'last_name',
        'role',
        'approved'
    ];
}
