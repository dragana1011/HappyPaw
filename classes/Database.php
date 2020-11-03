<?php

class Database
{

    // private $host = DB_HOST;
    // private $user = DB_USER;
    // private $password = DB_PASS;
    // private $dbname = DB_NAME;
    // private $charset = CHARSET;

    // private $dbh;
    // private $error;
    // private $stmt;

    public static function connect($database)
    {
        try {
            return new PDO('mysql:host=' . $database['host'] . ';dbname=' . $database['dbname'] . ';', $database['user'], $database['password']);
        } catch (PDOException $e) {
            die("Error" . $e->getMessage());
        }
    }
}
