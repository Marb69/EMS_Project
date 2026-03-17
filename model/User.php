<?php

class User
{


    private $conn;

    public function __construct($db)
    {


        $this->conn = $db;
    }


    public function addUser($username, $password, $role)
    {

        $sql = "INSERT INTO users (username,password,role) VALUES (:username,:password,:role)";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':username' => $username,
            ':password' => $password,
            ':role' => $role
        ]);


    }
}
