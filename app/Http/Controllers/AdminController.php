<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index1 (REQUEST $request){
       
        //atribute
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        
        // CREATE ADMIN ACCOUNT
        admin::create([
            'username'=> $username,
            'email'=> $email,
            'password'=> Hash::make($password),
        ]);

        return view('dashboard.SignIn_admin');

        

    }

    // CHECKING CREDENTIALS 
    public function index2 (REQUEST $request){

        $email = $request->email;
        $password = $request->password;


        $credentials = ['email' =>$email , 'password'=>$password];

         
        if (Auth::attempt($credentials)){

            // VALID LOGIN LOGIC 
            $request->session()->regenerate();
            return view('dashboard.dashboard1');
        }
        else{
            // INVALID LOGIN 
            return back()->withErrors([
                'email'=> 'Email ou mot de pass incorrect.'
            ])->onlyInput('email');
            
        }




        

        // $Admins = admin::all('username');
        // dd($Admins);

       


        


        // $Admins = admin::all('username');





    }
}
