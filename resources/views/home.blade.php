@extends('layouts.master')

@section('content')
    <main id="main" class="flex flex-col lg:flex-row lg:flex-wrap justify-start md:mb-24 px-4" role="main">
        <h2 class="lg:order-1 lg:w-1/4 lg:pt-16 text-5xl lg:text-right font-hairline uppercase">Have your say on</h2>

        <section class="lg:order-3 lg:w-1/4 mb-8 lg:pt-16">
            <h1 class="md:mb-8 text-5xl font-light uppercase">Airline Food</h1>
            <div class="hidden md:block">
                <p class="mb-8 text-grey text-lg font-light leading-normal">
                    Aeroplate is a stand alone review platform specifically built to
                    review food while flying anywhere in the world.
                    Information gathered from Aeroplate is used to
                    create a better eating experience for all.
                </p>
                <a href="#" class="inline-block px-4 py-3 text-white hover:text-grey font-light bg-black no-underline rounded-lg">
                    find out more
                </a>
            </div>
        </section>

        <section class="md:order-1 lg:order-4 flex flex-wrap sm:justify-center lg:w-full mb-8">
            <a href="#" class="md:order-1 inline-flex pr-1 sm:pr-2 w-1/2 sm:w-56">
                <img src="{{ url('assets/images/android.svg') }}" alt="Go to the Play Store for Android" class="w-full h-full">
            </a>
            <a href="#" class="md:order-1 inline-flex pl-1 sm:pl-2 w-1/2 sm:w-56">
                <img src="{{ url('assets/images/ios.svg') }}" alt="Go to the App Store for iOS" class="w-full h-full">
            </a>
            <p class="w-full mt-8 md:mt-0 md:mb-8 text-grey text-lg sm:text-center font-light">Get the app today. It's free!</p>
        </section>

        <picture class="lg:order-2 lg:w-1/2">
            <source
                data-srcset="{{ url('assets/images/phones.png') }}"
                media="--md"
                alt="Phones showing the beautiful Aeroplate app">
            <img
                data-src="{{ url('assets/images/phones-lg.png') }}"
                class="lazyload block mx-auto"
                alt="Phones showing the beautiful Aeroplate app">
        </picture>
    </main>
@endsection
