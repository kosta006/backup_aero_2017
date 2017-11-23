@extends('layouts.master')

@section('content')
    <main id="main" class="my-4 px-4" role="main">
        <h1 class="text-5xl font-hairline uppercase">Have you say on <strong class="block font-light">Airline Food</strong></h1>
    </main>

    <section class="flex flex-wrap justify-between my-4 px-4">
        <a href="#" class="inline-flex pr-1 w-1/2">
            <img src="{{ url('assets/images/android.svg') }}" alt="">
        </a>
        <a href="#" class="inline-flex pl-1 w-1/2">
            <img src="{{ url('assets/images/ios.svg') }}" alt="">
        </a>
        <p class="w-full mt-4 text-grey text-lg font-light">Get the app today. It's free!</p>
    </section>

    <section>
        <picture>
            <source
                data-srcset="{{ url('assets/images/phones.png') }}"
                media="--md">
            <img
                data-src="{{ url('assets/images/phones-lg.png') }}"
                class="lazyload block">
        </picture>
    </section>
@endsection
