<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Hospital;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /**
     * Show the doctor registration form.
     */
    public function showDoctorForm()
    {
        return view('livewire.doctor.form')
            ->layout('components.layouts.guest');
    }

    /**
     * Show the hospital registration form.
     */
    public function showHospitalForm()
    {
        return view('livewire.hospital.form')
            ->layout('components.layouts.guest');
    }

    /**
     * Show the patient registration form.
     */
    public function showPatientForm()
    {
        return view('livewire.patient.form')
            ->layout('components.layouts.guest');
    }

    /**
     * Handle doctor registration.
     */
    public function registerDoctor(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'license_number' => 'required|string|max:100|unique:doctors',
            'specialization' => 'required|string|max:255',
            'experience_years' => 'nullable|integer|min:0',
            'affiliation' => 'nullable|string|max:255',
            'address' => 'required|string',
            'clinical_days' => 'required|array|min:1',
            'clinical_days.*' => 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'password' => 'required|string|min:8|confirmed',
        ]);

        return DB::transaction(function () use ($validated) {
            // Create user
            $user = User::create([
                'name' => $validated['full_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
            ]);

            // Create doctor profile
            $user->doctor()->create([
                'license_number' => $validated['license_number'],
                'specialization' => $validated['specialization'],
                'experience_years' => $validated['experience_years'] ?? 0,
                'affiliation' => $validated['affiliation'] ?? null,
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'is_available' => true,
                'clinical_days' => $validated['clinical_days'],
            ]);

            auth()->login($user);

            return redirect('/login')
                ->with('success', 'Doctor registration successful!');
        });
    }

    /**
     * Handle patient registration.
     */
    public function registerPatient(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'emergency_contact_name' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        return DB::transaction(function () use ($validated) {
            // Create user
            $user = User::create([
                'name' => $validated['full_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'account_type' => 'patient',
                'password' => Hash::make($validated['password']),
            ]);

            // Create patient profile
            $user->patient()->create([
                'date_of_birth' => $validated['date_of_birth'],
                'gender' => $validated['gender'],
                'address' => $validated['address'],
                'emergency_contact_name' => $validated['emergency_contact_name'] ?? null,
                'emergency_contact_phone' => $validated['emergency_contact_phone'] ?? null,
                'is_active' => true,
            ]);

            auth()->login($user);

            return redirect()->route('dashboard')
                ->with('success', 'Patient registration successful!');
        });
    }

    /**
     * Handle hospital registration.
     */
    public function registerHospital(Request $request)
    {
        $validated = $request->validate([
            'facility_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'registration_number' => 'required|string|max:100|unique:hospitals',
            'institution_type' => 'required|in:hospital,clinic,laboratory,diagnostic_center,other',
            'capacity' => 'nullable|integer|min:0',
            'address' => 'required|string',
            'contact_person' => 'required|string|max:255',
            'contact_person_phone' => 'required|string|max:20',
            'contact_person_email' => 'nullable|email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        return DB::transaction(function () use ($validated) {
            // Create user
            $user = User::create([
                'name' => $validated['facility_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'account_type' => 'hospital',
                'password' => Hash::make($validated['password']),
            ]);

            // Create hospital profile
            $user->hospital()->create([
                'facility_name' => $validated['facility_name'],
                'registration_number' => $validated['registration_number'],
                'institution_type' => $validated['institution_type'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'address' => $validated['address'],
                'contact_person' => $validated['contact_person'],
                'contact_person_phone' => $validated['contact_person_phone'],
                'contact_person_email' => $validated['contact_person_email'] ?? null,
                'capacity' => $validated['capacity'] ?? 0,
                'is_approved' => false, // Default to false, admin needs to approve
            ]);

            // Log the user in
            auth()->login($user);

            return redirect()->route('dashboard')
                ->with('success', 'Hospital registration submitted for approval!');
        });
    }
}
