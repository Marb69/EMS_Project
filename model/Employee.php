<?php
class Employee
{



    private $conn;

    public function __construct($db)
    {

        $this->conn = $db;
    }



    public function getCountOfEmployee()
    {


        $stmt = $this->conn->prepare("SELECT COUNT(*) as total FROM employees");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function getEmployeeByEmail($email)
    {

        $stmt = $this->conn->prepare('SELECT * FROM employees WHERE email = ?');
        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getEmployeeByName($fname, $lname)
    {


        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE first_name = :fname AND last_name = :lname");
        $stmt->execute([':fname' => $fname, ':lname' => $lname]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function getEmployeeById($id)
    {

        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE user_id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function getAllEmployee()
    {

        $stmt = $this->conn->prepare('SELECT * FROM employees');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addEmployee($first_name, $last_name, $email, $phone, $address, $department, $position, $salary, $date_hired, $status)
    {


        try {
            $sql = "INSERT INTO employees (first_name,last_name,email,phone,address,department_id,position_id,salary,date_hired,status) VALUES (:firstname, :lastname,:email,:phone,:address,:departmentId,:positionId,:salary,:date_hired,:status)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ":firstname" => $first_name,
                ":lastname" => $last_name,
                ":email" => $email,
                ":phone" => $phone,
                ":address" => $address,
                ":departmentId" => $department,
                ":positionId" => $position,
                ":salary" => $salary,
                ":date_hired" => $date_hired,
                ":status" => $status
            ]);
        } catch (PDOException $e) {
        }
    }
}
