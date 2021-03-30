<?php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe = array_map('trim', $_POST);

    if (empty($recipe['title'])) {
        echo "The title is required.";
    }

    $maxTitleLength = 100;
    if (strlen($recipe['title']) > $maxTitleLength) {
        $errors[] = 'The title should be < ' . $maxTitleLength . 'characters';
    }

    $maxDecriptionLength = 2000;
    if (strlen($recipe['description']) > $maxDecriptionLength) {
        $errors[] = 'The title should be < ' . $maxDecriptionLength . 'characters';
    }

        saveRecipe($recipe);
        header('Location: /');
    }

require __DIR__ . '/src/views/form.php';