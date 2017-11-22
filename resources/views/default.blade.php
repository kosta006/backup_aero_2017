@extends('layouts.master')

@section('title', $page->title())

@section('content')
    <main id="main" class="px-6" role="main">
        <h1 class="mb-6 text-black text-5xl font-hairline">{{ $page->title() }}</h1>

        <div class="content text-grey-darkest">
            {{ $page->text()->kirbytext() }}
        </div>
    </main>
@endsection
