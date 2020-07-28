<?php


class DB
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=test", 'admin', 'admin');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}