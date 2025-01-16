<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Define web routes here.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello, world!';
});

Route::get('/greeting/{name}', function ($name) {
    return "Hello, $name!";
});

Route::get('/fullname/{firstname}/{lastname}', function ($firstname, $lastname) {
    return "Hello, $firstname $lastname!";
});

Route::get('/web/home', function () {
    return view('home');
})->name('menu_home');

Route::get('/web/about', function () {
    return view('about');
})->name('menu_about');

Route::get('/web/contact', function () {
    return view('contact');
})->name('menu_contact');

// Controller-based routes
use App\Http\Controllers\PageController;

Route::get('/controller/home', [PageController::class, 'home'])->name('menu_home');
Route::get('/controller/about', [PageController::class, 'about'])->name('menu_about');
Route::get('/controller/contact', [PageController::class, 'contact'])->name('menu_contact');

// Resource Controller example
use App\Http\Controllers\ResourceController;

Route::resource('resources', ResourceController::class);
