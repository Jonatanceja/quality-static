<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @include('_partials._nav')
        @yield('body')
        @include('_partials._footer')
    </body>
</html>
