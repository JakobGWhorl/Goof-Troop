<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = 
    [
    'scheduleID',
    'Date',
    'DoctorID',
    'Doctors_appointment',
    'caregivers_name',
    'Morning_med',
    'Afternoon_med',
    'Night_med',
    'Breakfast',
    'Lunch',
    'Dinner',
    'PatientID'
    ];
}
