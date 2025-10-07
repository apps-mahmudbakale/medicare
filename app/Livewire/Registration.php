<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Component;

/**
 * @property-read Schema $form
 */
class Registration extends Component implements HasForms
{
    use InteractsWithForms;

    /** @var array<string, mixed> */
    public $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    /** @return \Filament\Schemas\Components\Component[] */
    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Full Name')
                ->required()
                ->maxLength(255)
                ->placeholder('Enter your full name'),

            TextInput::make('email')
                ->label('Email Address')
                ->email()
                ->required()
                ->unique(User::class, 'email')
                ->maxLength(255)
                ->placeholder('Enter your email address'),

            Radio::make('membership_type')
                ->label('Membership Type')
                ->required()
                ->options([
                    'patient' => 'Patient',
                    'doctor' => 'Doctor',
                    'hospital' => 'Hospital',
                ])
                ->descriptions([
                    'patient' => 'Register as a patient to book appointments and access medical services',
                    'doctor' => 'Register as a doctor to provide medical consultations and services',
                    'hospital' => 'Register as a hospital to manage facilities and medical staff',
                ])
                ->default('patient')
                ->inline(false),

            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->minLength(8)
                ->maxLength(255)
                ->placeholder('Enter your password')
                ->revealable(),

            TextInput::make('password_confirmation')
                ->label('Confirm Password')
                ->password()
                ->required()
                ->same('password')
                ->maxLength(255)
                ->placeholder('Confirm your password')
                ->revealable(),
        ];
    }

    public function register(): void
    {
        $data = $this->form->getState();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'membership_type' => $data['membership_type'],
            'password' => Hash::make($data['password']),
        ]);

        auth()->login($user);

        Notification::make()
            ->title('Registration Successful!')
            ->success()
            ->body('Welcome to Medicare! Your account has been created successfully.')
            ->send();

        $this->redirect('/app', navigate: true);
    }

    protected function getFormStatePath(): ?string
    {
        return 'data';
    }

    public function render(): View
    {
        return view('livewire.registration')
            ->layout('components.layouts.guest');
    }
}
