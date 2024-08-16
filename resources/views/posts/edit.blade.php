<x-app-layout>
    {{-- @livewire('posts.show', :id='$id') --}}
    <livewire:posts.edit :id="$id" />
</x-app-layout>
