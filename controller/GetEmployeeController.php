<?php


$EmployeeModel = new Employee($conn);

$Employees = $EmployeeModel->getAllEmployee();
$EmCount = $EmployeeModel->getCountOfEmployee();

?>