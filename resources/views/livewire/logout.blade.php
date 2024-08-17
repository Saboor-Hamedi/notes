<div>
    {{-- my component --}}
    <x-nav-link href="#" wire:click.prevent="logout" :active="request()->routeIs('logout')" wire:navigate class="text-start">
        {{ __('Log Out') }}
    </x-nav-link>
</div>
