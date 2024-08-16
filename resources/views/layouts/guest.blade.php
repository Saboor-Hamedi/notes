@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="flex flex-col items-center p-2 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-6 py-4 mt-6 overflow-hidden shadow-md sm:max-w-md sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
