<?php

require 'config/init.php';




$template = new Template('views/adopt.view.php');

$template->animals = $query->selectAll('animals', 'Animal');

echo $template;
