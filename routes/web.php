<?php

use App\Models\Fee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController as Dashboard;

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
Route::view('/', 'index')->name('landingPage');
// Route::view('/home', 'index')->name('homePage');

// Route::view('loader', 'partials/loader1');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
/** auth routes please use route group toclean up code */


// checkout routes

// the webapp default checkout page which is actually currently undefined
Route::get('/checkout', [CheckoutController::class, 'index'])->middleware(['auth', 'verified'])->name('checkout.index');

// this is the prerequisite checkout page that's why it has 1 appended to it...
Route::get('/checkout1', [CheckoutController::class, 'index1'])->middleware(['auth', 'verified'])->name('checkout1.index');



// =====================================================================

Route::view('/elements', 'elements')->middleware(['auth', 'verified'])->name('elements');

Route::view('/instructors', 'instructors')->middleware(['auth', 'verified', 'userpay'])->name('instructors');

Route::view('/courses', 'courses')->middleware(['auth', 'verified', 'userpay'])->name('courses');

Route::view('/blog_details', 'blog_details')->middleware(['auth', 'verified', 'userpay'])->name('blog_details');

Route::view('/blog', 'blog')->middleware(['auth', 'verified', 'userpay'])->name('blog');

Route::view('/careers', 'careers')->middleware(['auth', 'verified', 'userpay'])->name('careers');

// Route::view('/dashboard', 'auth.checkout1')->middleware(['auth', 'verified', 'userpay'])->name('dashboard');
Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


// secondary routes
Route::get('/our_plans', fn () => 'our plans route page')->name('our_plans');
Route::get('/free_trial', fn () => 'our free_trial route page')->name('free_trial');
Route::get('/coming_soon', fn () => 'our coming_soon route page')->name('coming_soon');
Route::get('/todo', fn () => 'our todo route page')->name('todo');
Route::get('/urgent_todo', fn () => 'our urgent_todo route page')->name('urgent_todo');

// for students who want to view instructors

Route::get(
  'instructors/{instructor}',
  fn () => 'A single instructor page for students who want to view any specific instructor profile '. request()->instructor
)->name('instructors.show');
// there is no middleware for this route, cos its supposed to be available to both guests and registered users...

// for testing

Route::get('tester', function () {
});

Route::get('/tinker', function () {
})->name('tinker');


require __DIR__ . '/auth.php';
