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
    return view('HomePage');
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
    return view('AppointmentCreate');
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

