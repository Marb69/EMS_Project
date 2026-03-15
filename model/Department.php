<?php 



  class Department{


  private $conn;
     
    public function __construct($conn)
    {
     
        $this->conn = $conn;
    }

    
    public function getDepartmentById($id)
    {


        $stmt = $this->conn->prepare("SELECT * FROM department WHERE department_id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
     
  } 


    
?>