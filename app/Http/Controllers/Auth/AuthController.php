<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

	public function getSingUpPage(){
		return view("auth.signup");
	}

	public function getSignInPage(){
		return view("auth.signin");
	}


    public function signUp(){

    }

    public function signIn(){

    }

    public function signOut(){

    }
}
