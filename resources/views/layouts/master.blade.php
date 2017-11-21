<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--  <link href="//fonts.googleapis.com" rel="dns-prefetch">  --}}
    {{--  <link href="//fonts.gstatic.com" rel="dns-prefetch">  --}}
    <link href="{{ asset('assets/css/main.css') }}" rel="preload" as="style">
    <link href="{{ url('assets/images/logo.svg') }}" rel="preload" as="image">
    <link href="{{ asset('assets/js/lazysizes.min.js') }}" rel="preload" as="script">
    {{--  <link href="//fonts.gstatic.com/*.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">  --}}
    {!! $page->metaTags() !!}
    <script>window.lazySizesConfig = window.lazySizesConfig || {};</script>
    <script src="{{ asset('assets/js/lazysizes.min.js') }}" async></script>
</head>
<body class="max-w-md mx-auto p-4 font-sans text-darkest bg-lightest-grey">
    <a href="#main" class="clip">skip to content</a>

    <header class="" role="banner">
        <div class="relative flex flex-wrap justify-between">
            <a href="<?= $site->url() ?>" class="w-48 p-4 pl-6 text-white no-underline" title="<?= $site->title()->html() ?>">
                {{ svg('logo') }}
            </a>

        @include('partials.menu')
    </header>

    <main id="main" class="content" role="main">
        <h1>@yield('title')</h1>

        @yield('content')
    </main>

    <footer role="contentinfo">
        {{ $site->copyright()->kirbytext() }}
    </footer>

    {!! snippet('google-analytics', null, true) !!}
</body>
</html>
