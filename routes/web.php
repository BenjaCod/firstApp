<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Userdatabaserender;

/*

Route::view('/', 'home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    
Route::get('/c/{cname}', userdatabaserender::class);

*/


// Maintenance mode:

Route::view('/', 'maintenance');

require __DIR__.'/auth.php';
