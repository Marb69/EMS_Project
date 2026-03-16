<?php

include './config/db.php';;
include './model/Employee.php';
$EmployeeModel = new Employee($conn);




if (isset($_POST['add_employee'])) {


    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $postion = $_POST['position'];
    $date = $_POST['date_hired'];
    $status = $_POST['status'];


    $EmployeeModel->addEmployee($firstname, $lastname, $department, $email, $postion, $date, $status);

    header('location: index.php?page=admin&section=employee');
}

$Employees = $EmployeeModel->getAllEmployee();


