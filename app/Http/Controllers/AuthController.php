<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    function renderDashboard(Request $request){
        $user = Auth::user();
    
        // 1. Initialize the base relationship query builder
        $query = $user->libraryBooks()->with('genres');

        // 2. Apply the Status Filter (from our previous step)
        if ($request->has('status') && in_array($request->status, ['reading', 'completed', 'not started'])) {
            $query->where('status', $request->status);
        }

        // 3. Intercept the Search string input 
        if ($request->filled('search')) { 
            $searchTerm = $request->search; 
            
            $query->where(function ($subQuery) use ($searchTerm) { 
                $subQuery->where('title', 'LIKE', "%{$searchTerm}%") 
                        ->orWhere('author', 'LIKE', "%{$searchTerm}%"); 
            }); 
        } 

        // 4. Execute the fully structured query
        $books = $query->latest()->get();

        return view('users/dashboard', compact('books'));
            
    }


    function verify_email(){
        return view('Auth/verify-email');
    }

    public function renderForgotPassword()
    {
        return view('Auth/forgot-password');
    }

    public function renderResetPassword(Request $request)
    {
        // Pass the token and email from the URL directly to the view
        return view('Auth/reset-password', [
            'token' => $request->route('token'),
            'email' => $request->query('email')
        ]);
    }
}

