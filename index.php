<?php

include_once 'config/init.php';

// $animal = new Animal;

$template = new Template('views/index.view.php');

$template->title = 'HappyPaw';
// $template->animals = $animal->getAllAnimals();

echo $template;
