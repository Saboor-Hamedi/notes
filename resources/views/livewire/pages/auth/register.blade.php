<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
  <form wire:submit.prevent="register">
    <!-- Name -->
    <div class="mb-3">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input wire:model.live="name" id="name" type="text" name="name" class="form-control mt-1" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input wire:model.live="email" id="email" type="email" name="email" class="form-control mt-1" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mb-3">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input wire:model.live="password" id="password" type="password" name="password" class="form-control mt-1" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input wire:model.live="password_confirmation" id="password_confirmation" type="password" name="password_confirmation" class="form-control mt-1" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <!-- Already Registered & Submit Button -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <a class="text-sm text-muted text-decoration-none" href="{{ route('login') }}" wire:navigate>
            {{ __('Already registered?') }}
        </a>
        <x-primary-button class="btn btn-primary ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>

</div>
