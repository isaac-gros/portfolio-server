<?php

use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Link;
use WordPlate\Acf\Location;

add_action('acf/init', function () {
    if (!function_exists('register_extended_field_group')) {
        return;
    }

    register_extended_field_group([
        'title' => "Informations sur la création",
        'style' => 'default',
        'menu_order' => 2,
        'fields' => [
            Text::make('Description')
                ->required(),
            Image::make('Image')
                ->required(),
            Link::make('Lien'),
        ],
        'location' => [
            Location::if('post_type', '==', 'creations'),
        ]
    ]);
});
