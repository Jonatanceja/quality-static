<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta property="og:title" content="{{ $page->og_title ?? $page->title }}">
        <meta property="og:description" content="{{ $page->og_description ?? $page->description }}">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:image" content="{{ $page->og_image ?? '/assets/images/og-image.jpg' }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Calidad Inspections">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->og_title ?? $page->title }}">
        <meta name="twitter:description" content="{{ $page->og_description ?? $page->description }}">
        <meta name="twitter:image" content="{{ $page->og_image ?? '/assets/images/og-image.jpg' }}">
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
