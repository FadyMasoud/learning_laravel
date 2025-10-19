<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestResourceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




//New Route for About.blade (view)
Route::get('/about', function () {
    return view('about');
});


//New Route for return data not route to view(blade)
 Route::get('/home', function() {
 return 'Welcome At Home Function';
 });


//  parameter route
Route::get('ID/{id}',function($id) { 
    return 'ID: '.$id; }
); 



// optional parameter
Route::get('/greet/{name?}', function ($name="Guest") {
    return "Hello, " . $name;
});



// name route
Route::get('/profile', function () {
    return "User Profile";
})->name('profile');


//////////////////////////////////////////////////////////


// Addition Route
Route::get('/add/{a}/{b}', function ($a, $b) {
    return "Sum = " . ($a + $b);
});

// Subtraction Route
Route::get('/sub/{a}/{b}', function ($a, $b) {
    return "sub = " . ($a - $b);
});





////////////////////////////

// Addition Route try pass string 
//what happen if we pass string
Route::get('/add/{a?}/{b?}', function ($a="dwwd", $b="dwd") {
    return "Sum = " . $a ." ". $b;
});




////////////////////////////////////////////////////////////


Route::get('/home', fn() => view('home'));
Route::get('/about', fn() => view('about'));




Route::get('/drinks', function () {
    return "Welcome to the drinks page!";
})->middleware('age');


// first syntax using arrow function
// Route::get('/contact',fn() => view('contact')
// )->name('contact.show');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');



Route::resource('my', TestResourceController::class);
// Route::get('/my/{id}/update', [TestResourceController::class, 'update']);
// Route::get('/my/{id}/store', [TestResourceController::class, 'store']);


//second syntax using simple syntax function
// Route::get('/contact',function () { 
//     return view('contact');
// })->name('contact.show');


//third syntax using controller
// Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


////////////task Middleware role user///////
Route::get('/dashboard', function () {
    return "Welcome Admin Dashboard";
})->middleware('checkadmin');

/////////////////////////controller////////////////////////

Route::get('/register', function() {
    return view('register');
});

Route::post('/user/register', [UserController::class, 'postRegister']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homeSeconde');


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');   // or route('login')
})->name('logout');