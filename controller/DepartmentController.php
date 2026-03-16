<?php

include './config/db.php';
include './controller/DepartmentController.php';

$Departments = new Department($conn);



$deptID = 0;
$dept = $Departments->getDepartmentById($deptID);



 

?>