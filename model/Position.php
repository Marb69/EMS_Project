<?php 


class Postion {

 
   private $conn;


   public function __construct($db)
   {
    
      $this->conn = $db;
   }


   public function getAllPostion(){

         
       $sql = 'SELECT * FROM positions';
       $stmt = $this->conn->prepare($sql);

       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function getPositionById($id){


        $stmt = $this->conn->prepare('SELECT * FROM positions WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
   }
   
}   
  
?>