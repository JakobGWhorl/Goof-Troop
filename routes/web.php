<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

//application controller
use App\Http\Controllers\Application_Controller;
//API controllers
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
    return view('Landing_page');
});

//Roles
Route::get('/roles', function () {
    return view('Roles');
});

Route::get('/create/roles', function(){
    return view('Roles');
});


//Create Schedule
Route::get('/patient/schedule', function(){
    return view('Schedule');
});
//AppointmentCreate
Route::get('/create/appointment', function(){
    return view('Appointment_Create');
});



//registration routes
Route::get('/registration', [Application_Controller::class,'registration_form']);

//login routes
Route::get('/login', function(){
    return view('Login');
});

Route::post('/login', [Application_Controller::class, 'process_login']);

Route::post('/Logout', [Application_Controller::class, 'Logout']);

Route::get('/create/roster', function(){
    return view('Roster');
});

// Patient Routes
Route::get('/patient',function(){return view('Patient_Dashboard');});

//caregiver routes
Route::get('/caregiver',function(){return view('Caregiver_Dashboard');});
Route::get('/caregiver_home',function(){return view('Caregiver_Home');});

//supervisor routes
Route::get('/supervisor',function(){return view('Supervisor_Dashboard');});

Route::get('/roster_view',function(){return view('Roster_View');});

Route::get('/admins_report',function(){return view('Admin_Report');});

Route::get('/employees',function(){return view('Employees');});
//admin routes
Route::get('/admin',function(){return view('Admin_Dashboard');});
Route::get('/registration_approval',function(){return view('Approve_Registration');});
Route::get('/doctors_appointment',function(){return view('Doctors_Appointments');});
Route::get('/payment_view',function(){return view('payments_view');});
Route::get('/reports',function(){return view('Admin_Report');});

Route::get('/patient/home',function(){return view('patient_home');});

//doctor routes
Route::get('/doctor',function(){return view('Doctor_Dashboard');});