<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function renderDiscovery(Request $request){
        $search = $request->input('search');
        $type = $request->input('type', 'book'); // Default tab is 'book'
        $currentUserId = Auth::id();

        $books = collect();
        $users = collect();

        if ($type === 'book') {
            $books = Book::query()
                // If you have an 'is_public' or 'visibility' column, uncomment the line below:
                ->where('visibility', "public")
                ->when($search, function ($query, $search) {
                    $query->where(function ($q) use ($search) {
                        $q->where('title', 'like', "%{$search}%")
                          ->orWhere('author', 'like', "%{$search}%");
                    });
                })
                ->latest()
                ->paginate(12)
                ->appends($request->query());
        } elseif ($type === 'people') {
            $users = User::query()
                ->where('user_id', '!=', $currentUserId) // Exclude logged-in user
                ->when($search, function ($query, $search) {
                    $query->where(function ($q) use ($search) {
                        $q->where('firstname', 'like', "%{$search}%")
                          ->orWhere('lastname', 'like', "%{$search}%")
                          ->orWhere('email', 'like', "%{$search}%");
                          
                    });
                })
                ->latest()
                ->paginate(12)
                ->appends($request->query());
        }
        return view('users/discover', compact('books', 'users', 'type', 'search'));
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
