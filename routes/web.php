<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Employee_Controller;
use App\Http\Controllers\Registration_Employee_Controller;
use App\Http\Controllers\Role_Controller;
use App\Http\Controllers\Roster_Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('HomePage');
});


Route::get('/roles', function () {
    return view('roles');
});



//Create Schedule
Route::get('/patient/schedule', function(){
    return view('Schedule');
});
//AppointmentCreate
Route::get('/create/appointment', function(){
    return view('AppointmentCreate');
});



//registration routes
Route::get('/registration', function(){
    return view('registration');
});
Route::get('/login', function(){
    return view('login');
});




Route::get('/create/roster', function(){
    return view('roster');
});

Route::get('/create/roles', function(){
    return view('roles');
});

Route::get('/CareGiver',function(){return view('CareGiver');});

Route::get('/Supervisor',function(){return view('Supervisor');});

Route::get('/CaregiverHome',function(){return view('caregiverHome');});

Route::get('/RosterView',function(){return view('RosterView');});

Route::get('/AdminsReport',function(){return view('AdminsReport');});

Route::get('/Employees',function(){return view('Employees');});