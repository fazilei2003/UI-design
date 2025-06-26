<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Admin</title>
    @vite('resources/css/main.css')
</head>
<body style="background: #f8f9fa;">
    <div style="min-height: 100vh;">
        @include('layouts.navigation')

        @isset($header)
            <header class="admin-header">
                <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
