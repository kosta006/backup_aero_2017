@extends('layouts.master')

@section('title', $page->title())

@section('content')
    <main id="main" class="content" role="main">
        <h1>{{ $page->title() }}</h1>

        {{ $page->text()->kirbytext() }}
    </main>
@endsection
