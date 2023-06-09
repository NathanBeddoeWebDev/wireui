<?php

namespace WireUi\WireUi\Badge;

use WireUi\Support\ComponentPack;
use WireUi\WireUi\Badge\Colors\{Flat, Outline, Solid};

class Variants extends ComponentPack
{
    /**
     * Get the default option.
     */
    protected function default(): string
    {
        return 'solid';
    }

    /**
     * Get the available options.
     */
    public function all(): array
    {
        return [
            'flat'    => Flat::class,
            'outline' => Outline::class,
            'solid'   => Solid::class,
        ];
    }
}
