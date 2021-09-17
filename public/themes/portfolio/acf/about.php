<?php

use WordPlate\Acf\Fields\PageLink;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Location;

add_action('acf/init', function () {
    if (!function_exists('register_extended_field_group')) {
        return;
    }

    // Champs pour la page "À propos"
    register_extended_field_group([
        'title' => 'Présentation',
        'style' => 'default',
        'menu_order' => 2,
        'fields' => [
            Image::make('Image profil')
                ->instructions("L'image de présentation pour la page"),
            PageLink::make('Créations')
                ->instructions("Une liste de créations affichés sur la page")
                ->postTypes(['creations'])
                ->allowArchives(false)
                ->allowMultiple()
        ],
        'location' => [
            Location::if('page_template', '==', 'page-about.php'),
        ]
    ]);
});
