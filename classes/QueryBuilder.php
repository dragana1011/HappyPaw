<?php

/**database queries class**/

class QueryBuilder
{
    private $db_con;

    public function __construct($db)
    {
        $this->db_con = $db;
    }

    public function selectAll($table, $class)
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db_con->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS, $class);
        // $todos = $db->query("SELECT * FROM todos")->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}
