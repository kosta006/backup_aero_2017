<!DOCTYPE html>
<html lang="en" class="min-h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//fonts.googleapis.com" rel="dns-prefetch">
    <link href="//fonts.gstatic.com" rel="dns-prefetch">
    <link href="{{ asset('assets/css/main.css') }}" rel="preload" as="style">
    <link href="{{ asset('assets/js/lazysizes.js') }}" rel="preload" as="script">
    <link href="{{ asset('assets/js/main.js') }}" rel="preload" as="script">
    <link href="//fonts.gstatic.com/s/montserrat/v12/CdKWaRAal2Bxq9mORLKRRRampu5_7CjHW5spxoeN3Vs.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">
    <link href="//fonts.gstatic.com/s/montserrat/v12/IVeH6A3MiFyaSEiudUMXEweOulFbQKHxPa89BaxZzA0.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">
    <link href="//fonts.gstatic.com/s/montserrat/v12/zhcz-_WihjSQC0oHJ9TCYAzyDMXhdD8sAj6OAJTFsBI.woff2" rel="preload" as="font" crossorigin="crossorigin" type="font/woff2">
    {!! $page->metaTags() !!}
    <script>{!! inline('/assets/js/lazysizes-config.js') !!}</script>
    <script src="{{ asset('assets/js/lazysizes.js') }}" async></script>
    <script src="{{ asset('assets/js/main.js') }}" async></script>
</head>
<body class="h-full font-sans {{ r($page->isHomePage(), 'text-white', 'text-black') }} {{ r($page->isHomePage(), 'bg-brand', 'bg-white') }}">
    <div class="flex flex-col w-full min-h-screen {{ r($page->isHomePage(), 'lg:max-w-2xl', 'md:max-w-lg') }} mx-auto px-2 md:px-8">
        <a href="#main" class="clip">skip to content</a>

        <header role="banner">
            <div class="relative md:static flex flex-wrap md:flex-col justify-between md:items-center">
                <a href="<?= $site->url() ?>" class="w-40 py-6 pl-5 md:py-12 md:pl-0 {{ r($page->isHomePage(), 'text-white', 'text-black') }} no-underline" title="<?= $site->title()->html() ?>">
                    {{ svg('logo') }}
                </a>

                <button class="js-menu-btn md:hidden flex items-center px-6 {{ r($page->isHomePage(), 'text-white', 'text-black') }} no-focus" data-text="{{ r($page->isHomePage(), 'text-white', 'text-black') }}" data-active-text="{{ r($page->isHomePage(), 'text-blue', 'text-white') }}" data-active-background="{{ r($page->isHomePage(), 'bg-white', 'bg-black') }}">
                    <span class="js-menu-btn--open w-6">{{ svg('menu') }}</span>
                    <span class="js-menu-btn--close hidden w-6">{{ svg('close') }}</span>
                </button>

                <div class="js-menu-items z-50 absolute md:fixed pin-t-100 pin-x md:pin-t-reset md:pin-b hidden md:block w-full p-4 md:p-0 {{ r($page->isHomePage(), 'bg-white', 'bg-black') }} md:bg-black {{ r(! $page->isHomePage(), 'md:shadow-lg') }}">
                    @include('partials.menu')
                </div>
            </div>

        </header>

        @yield('content')
    </div>

    {!! snippet('google-analytics', null, true) !!}
</body>
</html>
