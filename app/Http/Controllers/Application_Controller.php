<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Appointment;

class Application_Controller extends Controller
{
    //registration form
    function registration_form($error=null){
        // return $error;
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
        function roles(){
            $roles = DB::table('roles')->select('role','access_level')->whereNot('access_level','=',1)->get();
            return json_decode(json_encode($roles),true);
        }
        return view('registration',['family_code'=>code(),'roles'=>roles(),'error'=>$error]);
    }

    // process login
    // TODO: Add check for if account is approved before login is granted
    function process_login(Request $r){
        $type = "";
        $account = null;
        //get email from request
        $email = $r->all('email');
        
        //search for email
        if(DB::table('patients')->select('email')->where('email','=',$email)->get() == '[]' && DB::table('employees')->select('email')->where('email','=',$email)->get() == '[]'){
            return view('login',['error'=>'No Account with such email!']);
        }
        elseif(DB::table('patients')->select('email')->where('email','=',$email)->get() == '[]'){
            $account = DB::table('employees')->select('employee_id','role','email','password')->where('email','=',$email)->get()[0];
            
        }
        else{
            $type = 'patient';
            $account = DB::table('patients')->select('patient_id','role','email','password')->where('email','=',$email)->get()[0];
        } 
        
        //get password from request
        $password = $r->all('password')['password'];
      
        //passwords match?
        if($password == $account->password){
            //successful login
            //store user id
            if($type == 'patient'){
                session(['id'=>$account->patient_id]);
            }else{
                session(['id'=>$account->employee_id]);
            }
            //store access level in session
            session(['access'=>DB::table('roles')->select('access_level')->where('role','=',$account->role)->get()[0]->access_level]);
            
            //set dashboard url
            $dashboard ='';
            switch(session('access')){
                
                case 1:
                    //Patient
                    $dashboard = '/patient';
                    break;
                case 2:
                    //Caregiver
                    $dashboard = '/caregiver';
                    break;
                case 3:
                    //Doctor
                    $dashboard = '/doctor';
                    break;
                case 4:
                    //Supervisor
                    $dashboard = '/supervisor';
                    break;
                case 5:
                    //Admin
                    $dashboard = '/admin';
                    break;
                
            }
            session(['dashboard'=>$dashboard]);
            //  return session()->all();
            return redirect(session('dashboard'));
            
        }
        else
            return view('login',['error'=>'Incorrect Password!']);
    
    }

    function Logout(){
        session()->flush();
        return redirect('/');
    }

    
    function Registration_Approval(){

        //check if logged in
        if(session('id')==null)
            return redirect('login');
        //check access
        if(session('access')!=5 && session('access')!=4){
            return redirect(session('dashboard'));
        }
        

        $employees = DB::table('employees')->select()->where('approved','=',false)->get();
        return view('approve_registration', ['employees' => $employees]);
    }

    function approved_employee(Request $r){
        $id = $r->id;
        $employee = DB::table('employees')->where('employee_id','=',$id)->update(['approved'=>true]);
        return redirect('/registration_approval/');
    }

  

}
