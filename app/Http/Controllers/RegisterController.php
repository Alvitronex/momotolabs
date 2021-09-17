<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    //crate method for sign up in session and return with same pagination
    public function create(){
        return View('auth.signup');
    }

    //add to method for the use on sign up
    public function store(){

    //we are put the parameters in where we carry it to called the database for save the data
        $user = User::create(request(['name', 'last' , 'email', 'password']));

        //log up with new credential and use a object 'user' for doing to a called database
        auth()->login($user);
        return redirect()->to('/');

    }
}
