<!DOCTYPE html>
<html lang="en" class="min-h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//fonts.googleapis.com" rel="dns-prefetch">
    <link href="//fonts.gstatic.com" rel="dns-prefetch">
    <link href="{{ asset('assets/css/main.css') }}" rel="preload" as="style">
    {{--  <link href="{{ asset('assets/js/lazysizes.min.js') }}" rel="preload" as="script">  --}}
    <link href="//fonts.gstatic.com/s/montserrat/v12/CdKWaRAal2Bxq9mORLKRRRampu5_7CjHW5spxoeN3Vs.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">
    <link href="//fonts.gstatic.com/s/montserrat/v12/IVeH6A3MiFyaSEiudUMXEweOulFbQKHxPa89BaxZzA0.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">
    <link href="//fonts.gstatic.com/s/montserrat/v12/zhcz-_WihjSQC0oHJ9TCYAzyDMXhdD8sAj6OAJTFsBI.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">
    {!! $page->metaTags() !!}
    {{--  <script>window.lazySizesConfig = window.lazySizesConfig || {};</script>  --}}
    {{--  <script src="{{ asset('assets/js/lazysizes.min.js') }}" async></script>  --}}
    <script src="{{ asset('assets/js/main.js') }}" async></script>
</head>
<body class="h-full font-sans {{ r($page->isHomePage(), 'text-white', 'text-black') }} {{ r($page->isHomePage(), 'bg-brand', 'bg-white') }}">
    <div class="max-w-md mx-auto px-2 md:px-8">
        <a href="#main" class="clip">skip to content</a>

        <header class="" role="banner">
            <div class="relative md:static flex flex-wrap justify-between">
                <a href="<?= $site->url() ?>" class="w-48 py-8 pl-5 {{ r($page->isHomePage(), 'text-white', 'text-black') }} no-underline" title="<?= $site->title()->html() ?>">
                    {{ svg('logo') }}
                </a>

                <button class="js-menu-btn md:hidden flex items-center px-8 {{ r($page->isHomePage(), 'text-white', 'text-black') }} no-focus" data-text="{{ r($page->isHomePage(), 'text-white', 'text-black') }}" data-active-text="{{ r($page->isHomePage(), 'text-blue', 'text-white') }}" data-active-background="{{ r($page->isHomePage(), 'bg-white', 'bg-black') }}">
                    <span class="js-menu-btn--open w-8">{{ svg('menu') }}</span>
                    <span class="js-menu-btn--close hidden w-8">{{ svg('close') }}</span>
                </button>

                <div class="js-menu-items absolute md:fixed pin-t-100 pin-x md:pin-t-reset md:pin-b hidden md:block w-full p-4 {{ r($page->isHomePage(), 'bg-white', 'bg-black') }} md:bg-black {{ r(! $page->isHomePage(), 'md:shadow-lg') }}">
                    @include('partials.menu')
                </div>
            </div>

        </header>

        @yield('content')
    </div>

    {!! snippet('google-analytics', null, true) !!}
</body>
</html>
