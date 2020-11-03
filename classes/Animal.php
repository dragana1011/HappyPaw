<?php

class Animal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Get all animals
    public function getAllAnimals()
    {
        // $this->db->query("SELECT * FROM animals");


        // $animals = $this->db->fetchAllData();
        // var_dump($animals);
        // return $animals;


        // $sql = "SELECT * FROM animals";
        // $query = $this->db->prepare($sql);
        // $query->execute();
        // $todos = $query->fetchAll(PDO::FETCH_OBJ);
        // $todos = $db->query("SELECT * FROM todos")->fetchAll(PDO::FETCH_OBJ);
        // return $todos;
    }
}
