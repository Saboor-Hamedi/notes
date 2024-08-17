<div>
    {{-- my component --}}
    @auth
        <x-nav-link href='#' wire:click.prevent="logout" :active="request()->routeIs('logout')" wire:navigate class="text-start">
            <i class="bi bi-box-arrow-right"></i>
        </x-nav-link>
    @endauth
</div>
