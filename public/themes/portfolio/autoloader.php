<?php

// Autoload every custom WordPress files/directories here
$directories = [
    'acf/',
    'cpt/',
];

foreach($directories as $directory) {
    $directory_path = (__DIR__ . "/" . $directory);
    $directory_content = array_diff(scandir($directory_path), ['..', '.']);
    
    foreach($directory_content as $directory_element) {
        include $directory_path . $directory_element;
    }
}