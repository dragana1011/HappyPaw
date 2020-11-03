<?php

include_once 'config/init.php';

$template = new Template('views/index.view.php');

$template->title = 'HappyPaw';

echo $template;
