<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Userdatabaserender;

$maintenanceSet = false;

if(!$maintenanceSet){
    Route::view('/', 'home');

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');
        
    Route::get('/c/{cname}', userdatabaserender::class);
} else {
    Route::view('/', 'maintenance');
}

require __DIR__.'/auth.php';
