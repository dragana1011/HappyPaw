<?php

require 'config/init.php';
// $animal = new Animal;
$template = new Template('views/adopt.view.php');

$template->animals = $query->selectAll('animals', 'Animal');
// $template->animals = $animal->getAllAnimals();

echo $template;
