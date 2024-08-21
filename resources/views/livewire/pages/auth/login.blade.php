<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

   <form wire:submit.prevent="login">
    <!-- Email Address -->
    <div class="mb-3">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input wire:model.live="form.email" id="email" type="email" name="email" placeholder="example@example.com"
            class="mt-1 form-control" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mb-3">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input wire:model.live="form.password" id="password" type="password" name="password" placeholder="Password"
            class="mt-1 form-control" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="mb-3 form-check">
        <input wire:model.live="form.remember" id="remember" type="checkbox" class="form-check-input" name="remember">
        <label for="remember" class="form-check-label">
            {{ __('Remember me') }}
        </label>
    </div>

    <!-- Forgot Password & Submit Button -->
    <div class="d-flex justify-content-between align-items-center">
        @if (Route::has('password.request'))
            <a class="text-sm text-muted text-decoration-none" href="{{ route('password.request') }}" wire:navigate>
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-primary-button class="btn btn-primary btn-sm">
            <i class="bi bi-unlock"></i> {{ __('Log in') }}
        </x-primary-button>
    </div>
</form>

</div>
