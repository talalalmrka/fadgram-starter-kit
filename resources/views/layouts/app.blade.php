<!DOCTYPE html>
<html {!! locale_attributes() !!}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? '' }} | {{ config('app.name', 'Fadgram starter kit') }}</title>
    <meta name="description" content="{{ $description ?? config('app.description') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css'])
    @stack('head')
    @stack('styles')
</head>

<body>
    {{ $slot }}
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>

</html>
