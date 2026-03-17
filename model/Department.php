<?php 



  class Department{


  private $conn;
     
    public function __construct($conn)
    {
     
        $this->conn = $conn;
    }

    
    public function getDepartmentById($id)
    {


        $stmt = $this->conn->prepare("SELECT * FROM departments WHERE department_id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllDepartments(){

      

       $stmt = $this->conn->prepare('SELECT * FROM departments');
       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     
  } 


    
?>