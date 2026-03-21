<?php

class User
{


    private $conn;

    public function __construct($db)
    {


        $this->conn = $db;
    }


    public function addUser($username, $password, $role,$employee_id)
    {

        $sql = "INSERT INTO users (username,password,role,employee_id) VALUES (:username,:password,:role,:employeeid)";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':username' => $username,
            ':password' => $password,
            ':role' => $role,
            ':employeeid' =>$employee_id
        ]);
    }


    public function getUserByUsername($username)
    {


        $stmt = $this->conn->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
