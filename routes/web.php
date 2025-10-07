<?php

use App\Http\Controllers\RegisterController;
use App\Livewire\Form;
use App\Livewire\Registration;
use Illuminate\Support\Facades\Route;

Route::get('form', Form::class);
Route::get('register', Registration::class)->name('register');

Route::redirect('login-redirect', 'login')->name('login');
Route::post('register', [RegisterController::class, 'store'])->name('register');

