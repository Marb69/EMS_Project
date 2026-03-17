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

        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE user_id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


     
    public function getAllEmployee(){

        $stmt = $this->conn->prepare('SELECT * FROM employees');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addEmployee($userId,$firstname,$lastname,$department,$position,$email,$status,$date){

    
    $sql = "INSERT INTO employee (user_id,name,department,position,contact,status,date_hired) VALUES (:userId, :fullname,:dapartment,:position,:contact,:status,:date_hired)";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        ':userId' => $userId,
        ':fullname' => $firstname . $lastname,
        ':department' => $department,
        ':position' => $position,
        ':contact' => $email,
        ':status' => $status,
        ':date_hired' => $date
    ]);
    }


}
