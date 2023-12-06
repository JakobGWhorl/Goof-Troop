<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class Patient_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        //
        // $request->validate([
        //     'first_name'=>'required',
        //     'last_name'=>'required',
        //     'role'=>'required',
        //     'email'=>'required',
        //     'phone'=>'required',
        //     'password'=>'required',
        //     'dob'=>'required'
        // ]);

        //check email pattern
        $email = $r->email;
        //[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$
        if(preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$email)==0)
            return redirect('registration/Invalid email format. Please format as "email@provider.com"/');
        
        //check that the email is not used in either the patient or the employee table already
        if(DB::table('employees')->select('email')->where('email','=',$email)->get()!='[]' || DB::table('patients')->select('email')->where('email','=',$email)->get()!='[]' ){
            return redirect('registration/This email is already in use/');
        }
        //check phone pattern
        $phone = $r->phone_number;
        //[0-9]{3}-[0-9]{3}-[0-9]{4}
        if(preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/",$phone)==0)
            return redirect('registration/Invalid phone number format. Please format as "000-000-0000"/');

        //check password length >6 and has one letter and one number
        $password = $r->password;
        if(strlen($password) < 6 || preg_match('/[a-zA-Z]/', $password)==0 || preg_match('/[0-9]/', $password)==0)
            return redirect('registration/Password must be 6 characters long and include one number and one letter/');
        
        
        Patient::create($r->all());
        return view('landing_page');
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
