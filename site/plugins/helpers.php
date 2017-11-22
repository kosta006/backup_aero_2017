<?php

function svg(string $name, int $size = null): string {
    $file = kirby()->roots()->assets().DS.'images'.DS.$name.'.svg';

    if (! file_exists($file)) {
        throw new Exception('The "'.$path.'" file does not exist.');
    }

    $svg = F::read($file);

    if ($size) {
        return "<span class=\"w-{$size} h-{$size}\">{$svg}</span>";
    }

    return $svg;
}

function inline(string $path): string {
    $path = ltrim($path, '/');
    $file = kirby()->roots()->index().DS.$path;

    if (! file_exists($file)) {
        throw new Exception('The "'.$path.'" file does not exist.');
    }

    $content = F::read($file);

    return preg_replace('/[\n\s]+/i', ' ', $content);
}
