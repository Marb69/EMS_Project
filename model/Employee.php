<?php

class Employee
{



    private $conn;

    public function __construct($db)
    {

        $this->conn = $db;
    }




    public function getEmployeeById($id)
    {

        $stmt = $this->conn->prepare("SELECT * FROM employee WHERE user_id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
