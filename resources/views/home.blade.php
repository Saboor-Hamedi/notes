<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>Notes</a>
    @livewire('navbar')
</nav>

<div class="mt-4">
    @livewire('posts.index')
</div>