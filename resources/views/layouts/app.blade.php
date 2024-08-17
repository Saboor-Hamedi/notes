<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Notes' }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body>
    {{-- navbar if you want for all pages --}}

    <!-- Main Content -->
    <div >
        {{ $slot }}
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/input.js') }}"></script>
</body>

</html>
