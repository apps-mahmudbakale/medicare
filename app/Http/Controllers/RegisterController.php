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
        return DB::transaction(function () use ($request) {

            $user = User::create([
                'name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $profilePicturePath = null;

            if ($request->hasFile('profile_picture')) {
                $profilePicturePath = $request->file('profile_picture')
                    ->store('profile-pictures', 'public');
            }

            $user->doctor()->create([
                'license_number' => $request->license_number,
                'specialization' => $request->specialization,
                'experience_years' => $request->experience_years,
                'affiliation' => $request->affiliation,
                'address' => $request->address,
                'phone' => $request->phone,
                'is_available' => true,
                'clinical_days' => $request->clinical_days,
                'profile_picture' => $profilePicturePath,
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
            'password' => 'required|string|min:8|confirmed',
        ]);

        return DB::transaction(function () use ($validated) {
            // Create user
            $user = User::create([
                'name' => $validated['facility_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
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
                'capacity' => $validated['capacity'] ?? 0,
            ]);

            // Log the user in
            auth()->login($user);

            return redirect()->route('dashboard')
                ->with('success', 'Hospital registration submitted for approval!');
        });
    }
}
