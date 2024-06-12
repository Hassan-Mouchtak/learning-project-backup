<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // request CRUD
    public function index3 (REQUEST $request){
       
        //atribute
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        // Validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        User::create([
            'name'=> $name,
            'email'=> $email,
            'password'=> Hash::make($password),
        ]);

        return view('login');
    }

    // CREDENTIALS LOGIC
    public function index4 (REQUEST $request){

        $email = $request->email;
        $password = $request->password;


        $credentials = ['email' =>$email , 'password'=>$password];

         
        if (Auth::attempt($credentials)){
            //valide login
            $request->session()->regenerate();
            return view('profile.component.matiers');
        }
        else{
            // anvalide login 
            return back()->withErrors([
                'email'=> 'Email ou mot de pass incorrect.'
            ])->onlyInput('email');
            
        }
    }

    // GET DATA
    public function etudiant(){
        $students = User::All();
        // dd('test');
        return view('/dashboard.component.student', [
            'students' => $students,
        ]);
        
    }

    // SOFT DELETE DATA
    public function softDelete($id){
        // dd('tes');
        User::find($id)->delete();
        return back();
    }


    public function cours(REQUEST $request){
        $nbcours = $request->nbcours;
        return view('/dashboard.component.courses.nbcours', [
            'nbcours' => $nbcours,
        ]);
    
    }
}


