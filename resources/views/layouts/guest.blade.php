{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<x-app-layout>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>Notes</a>
        @livewire('navbar')
    </nav>
  <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="p-4 rounded-lg shadow-lg w-100" style="max-width: 400px;">
        {{ $slot }}
    </div>
</div>

</x-app-layout>
