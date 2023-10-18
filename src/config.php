<?php

use WireUi\Enum\Packs;
use WireUi\View\Components;
use WireUi\{WireUi, WireUiConfig as Config};

return [

    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    |
    | This option controls the prefix for WireUI components. Examples:
    |
    | 'wireui-' => 'x-wireui-button'
    | 'wireui:' => 'x-wireui:button'
    |
     */

    'prefix' => null,

    /*
    |--------------------------------------------------------------------------
    | Global Styles
    |--------------------------------------------------------------------------
    |
    | This option controls the global styles for WireUI components.
    |
     */

    'style' => [
        'shadow'  => Packs\Shadow::BASE,
        'rounded' => Packs\Rounded::BASE,
        'color'   => Packs\Color::PRIMARY,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Configuration
    |--------------------------------------------------------------------------
    |
    | This option controls the default configuration for WireUI components.
    |
     */

    'alert' => Config::alert(),

    'avatar' => Config::avatar(),

    'badge' => Config::badge(),

    'mini-badge' => Config::badge([
        'packs' => [
            'sizes' => WireUi\Badge\Size\Mini::class,
        ],
    ]),

    'button' => Config::button(),

    'mini-button' => Config::button([
        'packs' => [
            'sizes' => WireUi\Button\Size\Mini::class,
        ],
    ]),

    'card' => Config::card(),

    // 'checkbox' => [
    //     //
    // ],

    'color-picker' => Config::wrapper(),

    'datetime-picker' => Config::wrapper(),

    'dialog' => Config::modal(),

    'dropdown' => Config::dropdown(),

    'icon' => Config::icon(),

    'input' => Config::wrapper(),

    'currency' => Config::wrapper(),

    'maskable' => Config::wrapper(),

    'number' => Config::wrapper(),

    'password' => Config::wrapper(),

    'phone' => Config::wrapper(),

    'link' => Config::link(),

    'modal' => Config::modal(),

    // 'modal-card' => [
    //     //
    // ],

    'native-select' => Config::wrapper(),

    'notifications' => Config::notifications(),

    // 'radio' => [
    //     //
    // ],

    'select' => Config::wrapper(),

    'textarea' => Config::wrapper(),

    'time-picker' => Config::wrapper(),

    // 'toggle' => [
    //     //
    // ],

    /*
    |--------------------------------------------------------------------------
    | WireUI Components
    |--------------------------------------------------------------------------
    |
    | Change the alias to call the component with a different name.
    | Extend the component and replace your changes in this file.
    |
     */

    'components' => Config::defaultComponents([
        // 'button' => [
        //     'alias' => 'new-button',
        // ],
        // 'mini-button' => [
        //     'class' => Components\Button\Mini::class,
        //     'alias' => 'new-mini-button',
        // ],
    ]),
];
