@extends('layouts.master')

@section('title', $page->title())

@section('content')
    <main id="main" class="px-4 md:px-0" role="main">
        <h1 class="mb-6 text-black text-5xl font-hairline">{{ $page->title() }}</h1>

        <div class="content md:mb-24 text-grey-darker text-lg sm:text-base">
            {{ $page->text()->kirbytext() }}
        </div>
    </main>
@endsection
