<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class Employee_Controller extends Controller
{
    //returns all employees
    function employees(){
        return Employee::all();
    }

}
