<?php

require 'config/init.php';
// $animal = new Animal;
$template = new Template('views/adopt.view.php');

$template->animals = $query->selectAll('animals', 'Animal');
$template->categories_type = $query->selectAll('categories', 'Category');
// $template->animals = $animal->getAllAnimals();

echo $template;
