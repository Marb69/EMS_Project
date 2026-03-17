<?php 



  include './config/db.php';
  include './model/Position.php';

  $Position = new Postion($conn);


  $AllPostion = $Position->getAllPostion();



  
?>