<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Application_Controller extends Controller
{
    //registration form
    function registration_form(){
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
    }

    // process login
    function process_login(Request $r){
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
    
    }
    function Logout(){
        return ("Your banned from new york");
    }
}
