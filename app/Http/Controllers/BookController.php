<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the text fields and file type limits
        $request->validate([
            'title'     => ['required', 'string', 'max:255'],
            'author'    => ['required', 'string', 'max:255'],
            'genre_id'  => ['required', 'exists:genres,id'],
            'book_file' => ['required', 'file', 'mimes:pdf,epub', 'max:20480'], // Limit file sizes to 20MB max
            'visibility'=>['required','in:public,private'],
        ]);

        
        if ($request->hasFile('book_file')) {
            $file = $request->file('book_file');

            // Extract file format extension dynamically (e.g., 'pdf', 'epub')
            $fileFormat = strtolower($file->getClientOriginalExtension());

            // Store file securely inside public disk directory storage maps
            $path = $file->store('books', 'public');

            // 2. Grab the currently logged-in user instance
            $currentUser = Auth::user();

            // 3. Save details to database rows
            $book =Book::create([
                'title'     => $request->title,
                'author'    => $request->author,
                'genre_id'  => $request->genre_id,
                'file_path' => $path, // Saves path string like: 'books/a7b8c9d0...pdf'
                'visibility'=>$request->visibility,
                'status'    =>'not started',
                'user'      => $currentUser->user_id,
                'format'    => $fileFormat,
            ]);

            $book->genres()->sync($request->genre);
            
            $currentUser->libraryBooks()->attach($book->id);

            return redirect('/dashboard')->with('success', 'Book uploaded successfully!');
        }

        return back()->withErrors(['book_file' => 'File upload processing failed.']);
    }


    public function renderReader($id)
    {
        $user = Auth::user();

        // 1. Fetch the book belonging to this specific logged-in user
        $book = $user->libraryBooks()->findOrFail($id);

        // 2. Automatically switch state if it hasn't been started yet
        if ($book->status === 'not started') {
            $book->update([
                'status' => 'reading'
            ]);
        }

        // 3. Return the correct path view mapping ('users.reader') and pass the $book variable // [!code highlight]
        return view('users.reader', compact('book')); // [!code highlight]
    }

    public function openReader($id)
{
     $user = Auth::user();

    // 1. Locate the book within the active user's personal library collection map
    $book = $user->libraryBooks()->findOrFail($id);

    // 2. State Transition: If the book is pristine, flip its progress status instantly
    if ($book->status === 'not started') {
        $book->update([
            'status' => 'reading'
        ]);
    }

    // 3. Render your reader page workspace layout template
    return view('reader', compact('book'));
}


}
