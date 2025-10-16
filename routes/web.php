<?php

use App\Http\Controllers\RegisterController;
use App\Livewire\Form;
use App\Livewire\Registration;
use Illuminate\Support\Facades\Route;

// Public routes
Route::middleware('guest')->group(function () {
    // Registration forms
    Route::get('register', Registration::class)->name('register');
    Route::get('register/doctor', [RegisterController::class, 'showDoctorForm'])->name('register.doctor.form');
    Route::get('register/hospital', [RegisterController::class, 'showHospitalForm'])->name('register.hospital.form');
    Route::get('register/patient', [RegisterController::class, 'showPatientForm'])->name('register.patient.form');
    
    // Registration form submissions
    Route::post('register/doctor', [RegisterController::class, 'registerDoctor'])->name('register.doctor');
    Route::post('register/hospital', [RegisterController::class, 'registerHospital'])->name('register.hospital');
    Route::post('register/patient', [RegisterController::class, 'registerPatient'])->name('register.patient');
});

// Authentication
Route::redirect('login-redirect', 'login')->name('login');

// Dashboard (protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
