@extends('layouts.master')

@section('content')
    <main id="main" class="flex-grow flex flex-col lg:flex-row lg:flex-wrap justify-start md:mb-24 px-4" role="main">
        <h2 class="lg:order-1 lg:w-1/4 lg:pt-16 lg:pl-20 xl:pl-32 text-5xl sm:text-center lg:text-right font-hairline leading-none uppercase">{{ $page->headlineOne() }}</h2>

        <section class="lg:order-3 lg:w-1/4 mb-4 lg:pt-16">
            <h1 class="md:mb-4 text-5xl sm:text-center lg:text-left font-light leading-none uppercase">{{ $page->headlineTwo() }}</h1>
            <div class="hidden lg:block">
                <p class="mb-4 text-white text-sm font-light leading-normal">
                    {{ $page->intro() }}
                </p>
                @if($page->buttonLink()->isNotEmpty() && $page->buttonText()->isNotEmpty())
                <a href="{{ $page->buttonLink() }}" class="inline-block px-4 py-3 text-sm text-white hover:text-grey font-light bg-black no-underline rounded-lg">
                    {{ $page->buttonText() }}
                </a>
                @endif
            </div>
        </section>

        <section class="lg:order-4 flex flex-wrap sm:justify-center lg:w-full mb-4">
            @if($page->androidButtonLink()->isNotEmpty())
            <a href="{{ $page->androidButtonLink() }}" class="inline-flex pr-1 sm:pr-2 w-1/2 sm:w-56">
                <img src="{{ url('assets/images/android.svg') }}" alt="{{ $page->androidButtonAlt() }}" class="w-full h-full">
            </a>
            @endif

            @if($page->iosButtonLink()->isNotEmpty())
            <a href="{{ $page->iosButtonLink() }}" class="inline-flex pl-1 sm:pl-2 w-1/2 sm:w-56">
                <img src="{{ url('assets/images/ios.svg') }}" alt="{{ $page->iosButtonAlt() }}" class="w-full h-full">
            </a>
            @endif

            @if($page->storeMessage()->isNotEmpty())
            <p class="lg:hidden w-full mt-4 text-grey sm:text-center font-light">{{ $page->storeMessage() }}</p>
            @endif
        </section>

        <picture class="overflow-hidden md:overflow-auto -mb-26 sm:-mb-32 md:-mb-0 mt-auto md:mt-0 mx-auto lg:order-2 max-w-xs lg:max-w-sm lg:w-1/2">
            <img
                class="lazyload block"
                data-srcset="{{ url('assets/images/phones.png') }} 1x, {{ url('assets/images/phones@2x.png') }} 2x"
                alt="Phones showing the beautiful Aeroplate app">
        </picture>
    </main>
@endsection
