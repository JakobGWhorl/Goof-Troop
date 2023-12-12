<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class Appointment_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //check if logged in
        if(session('id')==null)
            return redirect('login');
        //check access
        if(session('access')!=3){
            return redirect(session('dashboard'));
        }
        
        $appointments = Appointment::all();
        return view('Doctor_home', ['appointments' => $appointments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
