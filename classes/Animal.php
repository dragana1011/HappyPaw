<?php

class Animal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // private $db_con;

    // public function __construct($db)
    // {
    //     $this->db_con = $db;
    // }

    //Get all animals
    public function getAllCats()


    {

        //     $sql = "SELECT * FROM animalcategories where cat_id = 1";
        //     $query = $this->db_con->prepare($sql);
        //     $query->execute();
        //     $todos = $query->fetchAll(PDO::FETCH_OBJ);
        //     // $todos = $db->query("SELECT * FROM todos")->fetchAll(PDO::FETCH_OBJ);
        //     return $todos;
    }
}
