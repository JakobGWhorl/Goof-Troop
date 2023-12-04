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
    return view('landing_page');
});

//Roles
Route::get('/roles', function () {
    return view('roles');
});

Route::get('/create/roles', function(){
    return view('roles');
});


//Create Schedule
Route::get('/patient/schedule', function(){
    return view('Schedule');
});
//AppointmentCreate
Route::get('/create/appointment', function(){
    return view('appointment_create');
});



//registration routes
Route::get('/registration/{error?}', [Application_Controller::class,'registration_form']);

//login routes
Route::get('/login', function(){
    return view('login');
});

Route::post('/login', [Application_Controller::class, 'process_login']);



Route::get('/create/roster', function(){
    return view('roster');
});

// Patient Routes
Route::get('/patient',function(){return view('patient_dashboard');});

//caregiver routes
Route::get('/caregiver',function(){return view('caregiver_dashboard');});
Route::get('/CaregiverHome',function(){return view('caregiver_Home');});

//supervisor routes
Route::get('/supervisor',function(){return view('supervisor_dashboard');});

Route::get('/RosterView',function(){return view('roster_view');});

Route::get('/AdminsReport',function(){return view('admin_reports');});

Route::get('/Employees',function(){return view('Employees');});
//admin routes
Route::get('/admin',function(){return view('admin_dashboard');});
Route::get('/Registration/Approval',function(){return view('approve_resgistration');});
Route::get('/doctors_appointments',function(){return view('Doctors_appointments');});
Route::get('/payment_view',function(){return view('payments_view');});
Route::get('/reports',function(){return view('admin_reports');});

//doctor routes
Route::get('/doctor',function(){return view('doctor_dashboard');});