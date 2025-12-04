<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    @routes <!-- se usar Ziggy -->
    @vite('resources/js/app.js') <!-- se usar Vite -->
    @inertiaHead
</head>
<body class="font-sans antialiased">
    @inertia
</body>
</html>
