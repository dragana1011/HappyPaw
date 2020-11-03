<?php

class Categories
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getallCats()
    {
        $this->db->query("SELECT animals.*, categories.type 
                   FROM animalcategories ac
                   JOIN categories c ON c.cat_id = ac.cat_id
                   JOIN animals a ON a.anima_id = ac.anima_id
                   WHERE c.cat_id = 7
                   ORDER BY post_date DESC");

        //assign the result set
        $results = $this->db->fetchAllData();

        return $results;
    }
}
