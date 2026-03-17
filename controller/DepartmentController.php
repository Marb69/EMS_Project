<?php

include './config/db.php';
include './model/Department.php';

$Departments = new Department($conn);


$AllDept = $Departments->getAllDepartments();








 

?>