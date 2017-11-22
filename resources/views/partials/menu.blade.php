<nav class="flex flex-col w-full p-4 pb-6 {{ r($page->isHomePage(), 'bg-white', 'bg-black') }} text-5xl font-hairline uppercase" role="navigation" aria-label="site links">
    @foreach($pages->visible() as $item)
    <a href="{{ $item->url() }}" title="{{ $item->title() }}" class="-mb-2 {{ r($page->isHomePage(), 'text-blue', 'text-white') }} {{ r($item->isOpen(), 'font-light') }} no-underline">
        {{ $item->title() }}
    </a>
    @endforeach

    <footer class="mt-16 text-grey text-sm font-light normal-case" role="contentinfo">
        {{ $site->copyright()->kirbytext() }}
    </footer>
</nav>
