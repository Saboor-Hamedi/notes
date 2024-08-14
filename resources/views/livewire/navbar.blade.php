<div class="collapse navbar-collapse" id="navbarsExample02">
    <ul class="mr-auto navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('posts.index') }}" wire:navigate>
                {{ __('Create') }}
            </a>
        </li>
    </ul>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
</div>
