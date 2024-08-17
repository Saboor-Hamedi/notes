<x-app-layout>
    {{-- @livewire('posts.show', :id='$id') --}}
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>Notes</a>
        @livewire('navbar')
    </nav>
    <livewire:posts.edit :id="$id" />
</x-app-layout>
