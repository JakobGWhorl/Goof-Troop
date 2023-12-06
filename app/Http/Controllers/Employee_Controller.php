<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;


class Employee_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request )
    {
        
        $employees = Employee::all();
        return view('Employees', ['employees' => $employees]);
        
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'role'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'dob'=>'required'
        ]);
        Employee::create($request->all());
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
