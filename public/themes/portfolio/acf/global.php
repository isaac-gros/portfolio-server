<?php

use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Location;

add_action('acf/init', function() {
    if(!function_exists('register_extended_field_group')) {
        return;
    }

    // Champs SEO communs à tous les CPTs
    register_extended_field_group([
        'title' => 'Paramètres SEO',
        'style' => 'default',
        'fields' => [
            Text::make('Meta title')
                ->required(true),
            Text::make('Meta description')
                ->characterLimit(150)
                ->required(true),
        ],
        'location' => [
            Location::if('post_type', '==', 'project'),
            Location::if('post_type', '==', 'page'),
        ],
    ]);
});