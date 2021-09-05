<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'landing');
Route::view('/', 'index');
Route::view('/home', 'index');



Route::get('tester', function () {
});

// Route::view('loader', 'partials/loader1');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');



// auth routes please use route group toclean up code


// checkout routes


Route::get('/checkout', [CheckoutController::class, 'index'])->middleware(['auth', 'verified'])->name('checkout.index');


Route::get('/checkout1', [CheckoutController::class, 'index1'])->middleware(['auth', 'verified'])->name('checkout1.index');



// =====================================================================

Route::view('/elements', 'elements')->middleware(['auth', 'verified'])->name('elements');

Route::view('/instructors', 'instructors')->middleware(['auth', 'verified'])->name('instructors');

Route::view('/courses', 'courses')->middleware(['auth', 'verified'])->name( 'courses');

Route::view('/blog_details', 'blog_details')->middleware(['auth', 'verified'])->name('blog_details');

Route::view('/blog', 'blog')->middleware(['auth', 'verified'])->name('blog');

Route::view('/careers', 'careers')->middleware(['auth', 'verified'])->name('careers');

Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

// secondary routes
Route::get('/our_plans', fn() => 'our plans route page')->name('our_plans');
Route::get('/free_trial', fn () => 'our free_trial route page')->name('free_trial');
Route::get('/coming_soon', fn () => 'our coming_soon route page')->name('coming_soon');
Route::get('/todo', fn () => 'our todo route page')->name('todo');
Route::get('/urgent_todo', fn () => 'our urgent_todo route page')->name('urgent_todo');


require __DIR__ . '/auth.php';
