<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {
Route::get('/login', [AuthController::class,"renderLogin"])->name('login');
Route::get('/registration', [AuthController::class,"renderRegistration"])->name('register');
Route::get('/forgot-password', [AuthController::class, "renderForgotPassword"])->name('password.request'); 
Route::get('/reset-password/{token}', [AuthController::class, "renderResetPassword"])->name('password.reset');
});

Route::get('/', [AuthController::class,"renderWelcome"]);

Route::get('/dashboard', [AuthController::class,"renderDashboard"])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/discover', [UserController::class,"renderDiscovery"])->middleware(['auth', 'verified'])->name('discovery');
Route::get('/bookClub', [UserController::class,"renderBookClub"])->middleware(['auth', 'verified'])->name('bookClub');
Route::get('/readingStats', [UserController::class,"renderReadingStats"])->middleware(['auth', 'verified'])->name('readingStats');
Route::get('/settings', [UserController::class,"renderSettings"])->middleware(['auth', 'verified'])->name('settings');
Route::get('/help', [UserController::class,"renderHelp"])->middleware(['auth', 'verified'])->name('help');

Route::get('/reader/{id}',[BookController::class,"renderReader"])->middleware(['auth', 'verified'])->name('book.reader');
Route::post('/store',[BookController::class,"store"])->middleware(['auth', 'verified']);


Route::get('/email/verify', [AuthController::class, "verify_email"])
    ->middleware('auth')
    ->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (Request $request, $id, $hash) {
    
    // Manually fetch the user via your custom string tracking column
    $user = User::where('user_id', $id)->firstOrFail();

    // Secure check: Validate the URL cryptographic hash signature safely
    if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
        abort(403, 'This verification link is invalid or has expired.');
    }

    // If they are already verified, move them directly to the dashboard
    if ($user->email_verified_at) {
        return redirect('/dashboard?verified=1');
    }

    // Force write the timestamp directly into your database column
    $user->email_verified_at = Carbon::now();
    $user->save();

    // Fire native event hooks
    event(new Verified($user));

    // Log the user into the browser session so they pass the dashboard 'auth' middleware
    Auth::login($user);

    return redirect('/dashboard?verified=1');
})->name('verification.verify');