<?php


class Page
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    public function addUser(){
        $this->db->query('INSERT INTO users SET name=:name, email=:email, status=:status');
        $this->db->bind('name', 'user2');
        $this->db->bind('name', 'user2@host.loc');
        $this->db->bind('name', 'admin');
        $this->db->execute('name', 'user');
    }
    public function getOneUser(){
        $this->db->query('SELECT * FROM users WHERE id=:id');
        $this->db->bind('id', 1);
        return $this->db->getOne();
    }

    public function getUsers(){
        $this->db->query('SELECT * FROM users');
        return $this->db->getAll();
    }
}