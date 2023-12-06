<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class Appointment_Controller extends Controller
{
    function DoctorsHomeTable(){
        $employees = Appointment::all();
        return view('Doctor_home', ['appointments' => $employees]);
    }
    
}
