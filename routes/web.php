<?php

use App\Livewire\About;
use App\Livewire\Allcourses;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Instructore;
use App\Livewire\price;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/about', [About::class,'render'])->name('about');
Route::get('/home', [Home::class,'render'])->name('home');
Route::get('/price', [price::class,'render'])->name('price');
Route::get('/instructore', [Instructore::class,'render'])->name('instructore');
Route::get('/allcourses', [Allcourses::class,'render'])->name('allcourses');
Route::get('/contact', [Contact::class,'render'])->name('contact');

