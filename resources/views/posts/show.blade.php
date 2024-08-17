<x-app-layout>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>Notes</a>
        @livewire('navbar')
    </nav>
    <livewire:posts.show :id="$id" />
</x-app-layout>
