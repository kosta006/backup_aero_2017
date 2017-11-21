<!DOCTYPE html>
<html lang="en" class="min-h-full">
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
<body class="w-full h-full px-8 font-sans text-white bg-brand">
    <a href="#main" class="clip">skip to content</a>

    <header class="" role="banner">
        <div class="relative flex flex-wrap justify-between">
            <a href="<?= $site->url() ?>" class="w-48 p-4 pl-6 text-white no-underline" title="<?= $site->title()->html() ?>">
                {{ svg('logo') }}
            </a>

            <button class="js-menu-btn flex items-center px-6 text-white">
                <span class="js-menu-btn--open w-8">{{ svg('menu') }}</span>
                <span class="js-menu-btn--close hidden w-8">{{ svg('close') }}</span>
            </button>

            <div class="js-menu-items absolute pin-t-100 pin-x hidden">
                @include('partials.menu')
            </div>
        </div>

    </header>

    @yield('content')

    <footer class="-mx-8 -mt-1 p-4 text-grey text-center font-light bg-black" role="contentinfo">
        {{ $site->copyright()->kirbytext() }}
    </footer>

    {!! snippet('google-analytics', null, true) !!}
    <script src="{{ asset('assets/js/main.js') }}" async></script>
</body>
</html>
