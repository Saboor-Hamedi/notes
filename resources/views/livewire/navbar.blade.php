<div class="collapse navbar-collapse">
    <ul class="mr-auto navbar-nav">
        @auth
            <li class="nav-item">
                <x-nav-link :active="request()->routeIs('posts.create')" wire:navigate href="{{ route('posts.create') }}" class="nav-link">
                    {{ __('Create') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link :active="request()->routeIs('dashboard')" wire:navigate href="{{ route('dashboard') }}" class="nav-link">
                    {{ __('Profile') }}
                </x-nav-link>
            </li>
        @endauth

        @guest
            <li class="nav-item">
                @if (Route::has('register'))
                    <x-nav-link :active="request()->routeIs('register')" wire:navigate href="{{ route('register') }}" class="nav-link">
                        {{ __('Register') }}
                    </x-nav-link>
                @endif
            </li>
            <li class="nav-item">
                @if (Route::has('login'))
                    <x-nav-link :active="request()->routeIs('login')" wire:navigate href="{{ route('login') }}" class="nav-link">
                        {{ __('Log in') }}
                    </x-nav-link>
                @endif
            </li>
        @endguest
        <div class="mb-2">
            @livewire('logout')
        </div>

    </ul>



</div>
