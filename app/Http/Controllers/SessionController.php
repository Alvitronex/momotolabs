<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

//extends the controller for doing instance in the database
class SessionController extends Controller
{
    //create the fuction for the user create session new, but we are put route in where will complete form
    public function create(){
            //return the route in where he will to saty
        return View('auth.signin');
    }

    public function store() {
            //this function is for put a message emergent if your password or mail not is valid
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        //redirected route home for if your credential not is correct
                return redirect()->to('/');
            
    }
    //For destroy session and not stay your session open
    public function destroy (){
        auth()->logout();
//Redirect route to out
        return redirect()->to('/');
    }
}
