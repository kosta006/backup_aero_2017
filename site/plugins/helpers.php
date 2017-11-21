<?php

function svg(string $name, int $size = null): string {
    $svg = f::read(kirby()->roots()->assets()."/images/{$name}.svg");


    if ($size) {
        return "<span class=\"w-{$size} h-{$size}\">{$svg}</span>";
    }

    return $svg;
}
