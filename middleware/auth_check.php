<?php 
 
 $page = $_GET['page'] ?? 'login';
   if(!isset($_SESSION['user']) && $page != "login"){
    header("Location: index.php?page=login");
    exit;
}
?>