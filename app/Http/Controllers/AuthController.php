<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function renderWelcome(){
        return view('welcome');
    }

    function renderLogin(){
        return view('Auth/login');
    }

    function renderRegistration(){
        return view('Auth/registration');
    }
}
