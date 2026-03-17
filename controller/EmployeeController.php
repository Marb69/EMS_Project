<?php



include './config/db.php';
include './model/Employee.php';
include './model/User.php';
$EmployeeModel = new Employee($conn);
$UserModel = new User($conn);




if (isset($_POST['add_employee'])) {






    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $date = $_POST['date_hired'];
    $status = $_POST['status'];


    $EmployeeModel->addEmployee($id, $firstname, $lastname, $department, $email, $position, $date, $status);


    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $role = $_POST['role'];

    $UserModel->addUser($username, $password, $role);

    header('location: index.php?page=admin&section=employee');
}

$Employees = $EmployeeModel->getAllEmployee();
