<?php
class University
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getPosts()
    {
        $this->db->query("SELECT * FROM department");

        return $this->db->resultSet();
    }
}