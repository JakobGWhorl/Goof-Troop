<?php

use App\Http\Controllers\Employee_Controller;
use App\Http\Controllers\Patient_Controller;
use App\Http\Controllers\Role_Controller;
use App\Http\Controllers\Roster_Controller;
use App\Http\Controllers\Appointment_ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('employees',Employee_Controller::class);
Route::resource('patients',Patient_Controller::class);
Route::resource('rosters',Roster_Controller::class);
Route::resource('roles',Role_Controller::class);
Route::resource('appointments',Appointment_ApiController::class);



