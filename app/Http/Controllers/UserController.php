<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function renderDiscovery(){
        return view('users/discover');
    }

    function renderBookClub(){
        return view('users/bookClub');
    }

    function renderReadingStats(){
        return view('users/readingStats');
    }

    function renderSettings(){
        return view('users/settings');
    }

    function renderHelp(){
        return view('users/help');
    }


}
