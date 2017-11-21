<nav class="flex flex-col w-full p-4 pb-6 bg-white" role="navigation" aria-label="site links">
    @foreach($pages->visible() as $item)
    <a href="{{ $item->url() }}" title="{{ $item->title() }}" class="-mb-2 no-underline text-blue text-5xl {{ r($item->isOpen(), 'font-light', 'font-hairline') }} uppercase">
        {{ $item->title() }}
    </a>
    @endforeach
</nav>
