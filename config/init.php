<?php

$config = require 'config.php';
require 'classes/Database.php';
// $database = $config['database'];

// $db = new PDO('mysql:host = localhost;dbname = exercises;', 'dragana', 'dragana123');
$db = Database::connect($config['database']);

require 'classes/Animal.php';
require 'classes/QueryBuilder.php';
require 'classes/Template.php';
$query = new QueryBuilder($db);

// require_once 'config.php';

// spl_autoload_register(function ($class) {
//     require_once 'classes/' . $class . '.php';
// });


/**
 * Simple autoloader, so we don't need Composer just for this.
 */
// class Autoloader
// {
//     public static function register()
//     {
//         spl_autoload_register(function ($class) {
//             $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
//             if (file_exists($file)) {
//                 require $file;
//                 return true;
//             }
//             return false;
//         });
//     }
// }
// Autoloader::register();
