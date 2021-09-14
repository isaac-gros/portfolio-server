<?php

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Location;

add_action('acf/init', function () {
    if (!function_exists('register_extended_field_group')) {
        return;
    }

    // Champs pour l'ajout d'un projet
    register_extended_field_group([
        'title' => 'Contenu projet',
        'style' => 'default',
        'menu_order' => 1,
        'fields' => [
            Text::make('Résumé')
                ->instructions("Court paragraphe pour présenter le projet")
                ->required(),
            Image::make('Aperçu')
                ->required()
                ->mimeTypes(['png', 'jpeg', 'jpg', 'gif']),
            Group::make('Galerie')
                ->instructions("Captures d'écran du projet")
                ->fields([
                    Image::make('Image 1'),
                    Image::make('Image 2'),
                    Image::make('Image 3'),
                    Image::make('Image 4'),
                ])
                ->layout('table')
                ->required()
        ],
        'location' => [
            Location::if('post_type', '==', 'project'),
        ],
    ]);
});
