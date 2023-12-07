<?php

use App\Http\Controllers\Appointment_Controller;
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


//Create Schedule
Route::get('/patient/schedule', function(){
    return view('Schedule');
});
//AppointmentCreate
Route::get('/create/appointment', function(){
    return view('Appointment_Create');
});



//registration routes
Route::get('/registration/{error?}', [Application_Controller::class,'registration_form']);

//login routes
Route::get('/login', function(){
    return view('Login');
});

Route::post('/login', [Application_Controller::class, 'process_login']);

Route::post('/Logout', [Application_Controller::class, 'Logout']);

//roster routes

Route::get('/create/roster', function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=4 && session('access')!=5){
        return redirect(session('dashboard'));
    }
    return view('Roster');
});
Route::get('/roster_view',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=1 && session('access')!=2){
        return redirect(session('dashboard'));
    }
    return view('Roster_View');
});

// Patient Routes
Route::get('/patient',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=1){
        return redirect(session('dashboard'));
    }
    return view('Patient_Dashboard');
});
Route::get('/patient/home',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=1){
        return redirect(session('dashboard'));
    }
    return view('patient_home');
});

//Doctor routes
Route::get('/doctor',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=3){
        return redirect(session('dashboard'));
    }
    return view('Doctor_Dashboard');
});
Route::get('/patient_of_doctor',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=3){
        return redirect(session('dashboard'));
    }
    return view('patient_of_doctor');
});
Route::get('/prescriptions',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=3){
        return redirect(session('dashboard'));
    }
    return view('prescriptions');
});
// Route::get('/doctor_home', [Appointment_Controller::class,'DoctorsHomeTable']);

//caregiver routes
Route::get('/caregiver',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=2){
        return redirect(session('dashboard'));
    }
    return view('Caregiver_Dashboard');
});
Route::get('/caregiver_home',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=2){
        return redirect(session('dashboard'));
    }
    return view('Caregiver_Home');
});

//supervisor routes
Route::get('/supervisor',function(){
    //check if logged in
    if(session('id')==null)
    return redirect('login');
    //check access
    if(session('access')!=4){
        return redirect(session('dashboard'));
    }
    return view('Supervisor_Dashboard');
});
Route::get('/doctors_appointment',function(){
    //check if logged in
    if(session('id')==null)
    return redirect('login');
    //check access
    if(session('access')!=4 && session('access')!=5){
        return redirect(session('dashboard'));
    }
    return view('Doctors_Appointments');
});
Route::get('/registration_approval', [Application_Controller::class,'registration_approval']);

Route::get('/admins_report',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=4 && session('access')!=5){
        return redirect(session('dashboard'));
    }
    return view('Admin_Report');
});


//admin routes
Route::get('/admin',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(session('access')!=5){
        return redirect(session('dashboard'));
    }
    return view('Admin_Dashboard');
});

Route::post('/approved_employee', [Application_Controller::class,'approved_employee']);

Route::get('/payment_view',function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(\session('access')!=5){
        return redirect(session('dashboard'));
    }
    return view('payments_view');
});

Route::get('/create/roles', function(){
    //check if logged in
    if(session('id')==null)
        return redirect('login');
    //check access
    if(\session('access')!=5){
        return redirect(session('dashboard'));
    }
    return view('Roles');
});


