<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/greet/{name?}', function ($name = "Guest") {
    return "Hello, " . $name;
});



// name route
Route::get('/profile', function () {
    return "User Profile";
})->name('profile');

