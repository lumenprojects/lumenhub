<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
</head>
<body class="bg-PearlWhite min-h-screen">
{{-- Левая вертикальная полоса --}}
<div
    class="absolute top-0 bottom-0 w-0.5 bg-SkyWhite left-21_5"
></div>

{{-- Правая вертикальная полоса --}}
<div
    class="absolute top-0 bottom-0 w-0.5 bg-SkyWhite left-78_5"
></div>
<main class="max-w-2xl mx-auto px-4">
    @yield('content')
</main>
</body>
</html>
