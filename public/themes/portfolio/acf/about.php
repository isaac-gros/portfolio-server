<?php

use WordPlate\Acf\Fields\PageLink;
use WordPlate\Acf\Location;

add_action('acf/init', function () {
    if (!function_exists('register_extended_field_group')) {
        return;
    }

    // Champs pour la page "À propos"
    register_extended_field_group([
        'title' => 'Réalisations mises en avant',
        'style' => 'default',
        'menu_order' => 2,
        'fields' => [
            PageLink::make('Réalisations')
                ->postTypes(['realisations'])
                ->allowArchives(false)
                ->allowMultiple()
        ],
        'location' => [
            Location::if('page_template', '==', 'page-about.php'),
        ]
    ]);
});
