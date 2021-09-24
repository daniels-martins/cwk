<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController as Payment;
use App\Http\Controllers\Auth\NewPasswordController as NewPassword;
use App\Http\Controllers\Auth\VerifyEmailController as VerifyEmail;
use App\Http\Controllers\Auth\RegisteredUserController as RegisteredUser;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\PasswordResetLinkController as PasswordResetLink;
use App\Http\Controllers\Auth\ConfirmablePasswordController as ConfirmablePassword;
use App\Http\Controllers\Auth\AuthenticatedSessionController as AuthenticatedSession;
use App\Http\Controllers\FlutterwaveController as Flutterwave;
use App\Http\Controllers\Auth\EmailVerificationPromptController as EmailVerificationPrompt;
use App\Http\Controllers\Auth\EmailVerificationNotificationController as EmailVerificationNotify;

Route::get('/register', [RegisteredUser::class, 'create'])
  ->middleware('guest')
  ->name('register');

Route::post('/register', [RegisteredUser::class, 'store'])
  ->middleware('guest');

Route::get('/login', [AuthenticatedSession::class, 'create'])
  ->middleware('guest')
  ->name('login');

Route::post('/login', [AuthenticatedSession::class, 'store'])
  ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLink::class, 'create'])
  ->middleware('guest')
  ->name('password.request');

Route::post('/forgot-password', [PasswordResetLink::class, 'store'])
  ->middleware('guest')
  ->name('password.email');

Route::get('/reset-password/{token}', [NewPassword::class, 'create'])
  ->middleware('guest')
  ->name('password.reset');

Route::post('/reset-password', [NewPassword::class, 'store'])
  ->middleware('guest')
  ->name('password.update');
// ---------------------------------------------------------------------------------------
// Route::get('/verify-email', [EmailVerificationPrompt::class, '__invoke'])
//   ->middleware('auth')
//   ->name('verification.notice');
Route::get('/email/verify', function () {
  return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
// ------------------------------------------------------------------------------

// ------------------------------------------------------------------------------------
// Route::get('/verify-email/{id}/{hash}', [VerifyEmail::class, '__invoke'])
//   ->middleware(['auth', 'signed', 'throttle:6,1'])
//   ->name('verification.verify');

// this route should flash a data to the session to congratulate the user for verifying 
// their email with us
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('dashboard')->with(
    'email_verified_status',
    'Congratulations, your email has been verified!');
})->middleware(['auth', 'signed'])->name('verification.verify');
// ------------------------------------------------------------------------------------


Route::post('/email/verification-notification', [EmailVerificationNotify::class, 'store'])
  ->middleware(['auth', 'throttle:6,1'])
  ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePassword::class, 'show'])
  ->middleware('auth')
  ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePassword::class, 'store'])
  ->middleware(['auth', 'verified']);

Route::post('/logout', [AuthenticatedSession::class, 'destroy'])
  ->middleware('auth')
  ->name('logout');


// udo auth routes

Route::get('thankyou', [Payment::class, '__invoke'])
  ->middleware(['auth', 'verified'])
  ->name('thankyou');

// for flutterwave
Route::post('prep_flutterwave', [Flutterwave::class, '__invoke'])
  ->middleware('auth','verified')
  ->name('prep_flutterwave');
