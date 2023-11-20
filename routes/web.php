<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Employee_Controller;
use App\Http\Controllers\Registration_Employee_Controller;
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
    return view('welcome');
});
//Create Schedule
Route::get('/patient/schedule', function(){
    return view('Schedule');
});
//AppointmentCreate
Route::get('/create/appointment', function(){
    return view('AppointmentCreate');
});
//Employee Model Routes
Route::get('/employees', [Employee_Controller::class, 'employees']);

//Registration Employee Model Routes
Route::get('/unapproved_employees', [Registration_Employee_Controller::class, 'unapproved_employees']);