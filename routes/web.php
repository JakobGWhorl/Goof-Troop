<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Employee_Controller;
use App\Http\Controllers\Registration_Employee_Controller;
use App\Http\Controllers\Role_Controller;
use App\Http\Controllers\Roster_Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
    return view('home_page');
});


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
Route::get('/registration', function(){
    function code(){
        $code =  rand(100000000000,999999999999);

        // check DB
        if( DB::table('patients')->select('family_code')->where('family_code','=',$code)->get() == '[]'){
            return $code;
        }
        else{
            return code();
        }
    }
    return view('registration',['family_code'=>code()]);
});
Route::get('/login', function(){
    return view('login');
});

Route::post('/login', function(Request $r){
    $account = null;
    //get email from request
    $email = $r->all('email');
    
    //search for email
    if(DB::table('patients')->select('email')->where('email','=',$email)->get() == '[]' || DB::table('employees')->select('email')->where('email','=',$email)->get() == '[]'){
        return view('login',['error'=>'No Account with such email!']);
    }
    elseif(DB::table('patients')->select('email')->where('email','=',$email)->get() == '[]'){
        $account = DB::table('employees')->select('email','password')->where('email','=',$email)->get()[0];
    }
    else{
        $account = DB::table('patients')->select('email','password')->where('email','=',$email)->get()[0];
    } 
    
    //get password from request
    $password = $r->all('password')['password'];
  
    //passwords match?
    if($password == $account->password)
        return "Successful Login!";
    else
        return view('login',['error'=>'Incorrect Password!']);

});

Route::get('/create/roster', function(){
    return view('roster');
});

Route::get('/create/roles', function(){
    return view('roles');
});

Route::get('/CareGiver',function(){return view('caregiver');});

Route::get('/Supervisor',function(){return view('supervisor');});

Route::get('/CaregiverHome',function(){return view('caregiver_Home');});

Route::get('/RosterView',function(){return view('roster_view');});

Route::get('/AdminsReport',function(){return view('admin_reports');});

Route::get('/Employees',function(){return view('employees');});

Route::get('/admin_dashboard',function(){return view('Admin_dashboard');});
Route::get('/registration_approval',function(){return view('approve_registration');});
Route::get('/doctors_appointments',function(){return view('Doctors_appointments');});
Route::get('/payment_view',function(){return view('payments_view');});
Route::get('/reports',function(){return view('admin_reports');});
Route::get('/roles',function(){return view('Roles');});
