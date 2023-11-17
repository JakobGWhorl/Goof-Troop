<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration_Employee;
use Illuminate\Support\Facades\DB;
class Registration_Employee_Controller extends Controller
{
    //returns all employees that are waiting approval
    function unapproved_employees(){
        $unapproved = DB::table('registration_employees')->where('approved',0)->get();
        return $unapproved;
    }
}
