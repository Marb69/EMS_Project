<?php



    include '../config/db.php';
    include '../model/Employee.php';
    include '../model/User.php';

$EmployeeModel = new Employee($conn);
$UserModel = new User($conn);




if (isset($_POST['add_employee'])) {






    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addreass = $_POST['address'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $date = $_POST['date_hired'];
    $status = $_POST['status'];



    $EmployeeModel->addEmployee($firstname, $lastname, $email, $department, $position, $date, $status);


    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $role = $_POST['role'];

    $UserModel->addUser($username, $password, $role);

    header('location: index.php?page=admin&section=employee');
}

$Employees = $EmployeeModel->getAllEmployee();
