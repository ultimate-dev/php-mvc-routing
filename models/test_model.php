<?php

class Test_Model extends DB
{
    public function getAll()
    {
        $sql = "SELECT * FROM tests";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
}