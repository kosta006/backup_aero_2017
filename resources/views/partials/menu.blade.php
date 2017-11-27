<nav class="flex flex-col md:flex-row md:items-baseline md:justify-between md:max-w-lg mx-auto md:px-8 text-5xl md:text-sm font-hairline md:font-light uppercase md:normal-case" role="navigation" aria-label="site links">
    @foreach($pages->visible() as $item)
    <a href="{{ $item->url() }}" title="{{ $item->title() }}" class="-mb-2 md:mb-0 md:pr-6 md:py-2 {{ r($page->isHomePage(), 'text-blue md:text-grey') }} {{ r($item->isOpen(), 'text-white font-regular', 'text-grey') }} md:hover:text-white no-underline">
        {{ $item->title() }}
    </a>
    @endforeach

    <footer class="mt-16 md:mt-0 md:ml-auto text-grey text-sm md:text-xs font-light normal-case" role="contentinfo">
        {{ $site->copyright()->kirbytext() }}
    </footer>
</nav>
