<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = 
    ['appointmentID',
    'patientID',
    'Doctor',
    'Name',
    'comment',
    'Morning_med',
    'Afternoon_med',
    'Night_med',
    'Date'
    ];
}
