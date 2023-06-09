<?php

namespace WireUi\WireUi\Badge\Sizes;

use WireUi\Support\ComponentPack;

class Mini extends ComponentPack
{
    /**
     * Get the default option.
     */
    protected function default(): string
    {
        return 'sm';
    }

    /**
     * Get the available options.
     */
    public function all(): array
    {
        return [
            'sm' => 'w-6 h-6',
            'md' => 'w-7 h-7',
            'lg' => 'w-8 h-8',
        ];
    }
}
