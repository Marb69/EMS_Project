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


     
    public function getAllEmployee(){

        $stmt = $this->conn->prepare('SELECT * FROM employee');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addEmployee($firstname,$lastname,$department,$postion,$email,$status,$date){

    
    $sql = "INSERT INTO employee (name,department,postion,contact,status,date_hired) VALUES (:fullname,:dapartment,:postion,:contact,:status,:date_hired)";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
        ':fullname' => $firstname . $lastname,
        ':department' => $department,
        ':postion' => $postion,
        ':contact' => $email,
        ':status' => $status,
        ':date_hired' => $date
    ]);
    }


}
