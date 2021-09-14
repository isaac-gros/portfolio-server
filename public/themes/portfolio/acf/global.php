<?php

use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\WysiwygEditor;

add_action('acf/init', function () {
    if (!function_exists('register_extended_field_group')) {
        return;
    }

    // Champs communs à tous les CPTs
    register_extended_field_group([
        'title' => 'Paramètres généraux',
        'style' => 'default',
        'menu_order' => 0,
        'fields' => [
            Text::make('Meta title')
                ->required(true),
            Text::make('Meta description')
                ->characterLimit(150)
                ->required(true),
            WysiwygEditor::make('Contenu')
                ->mediaUpload(false)
                ->required(),
        ],
        'location' => [
            Location::if('post_type', '==', 'project'),
            Location::if('post_type', '==', 'page'),
        ],
    ]);
});
