<?php
ob_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $EmployeeModel = new Employee($conn);
    $UserModel     = new User($conn);

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $department = $_POST['department'];
    $position   = $_POST['position'];
    $salary     = $_POST['salary'];
    $date_hired = $_POST['date_hired'];
    $status     = $_POST['status'];
    $username   = $_POST['username'];
    $role       = $_POST['role'];
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $employee    = $EmployeeModel->getEmployeeByName($first_name, $last_name);
    $EmEmail     = $EmployeeModel->getEmployeeByEmail($email);
    $UrUsername  = $UserModel->getUserByUsername($username);

    if ($employee) {
        echo 'Employee already exists.';
    } elseif ($EmEmail) {
        echo 'Email is already in use.';
    } elseif ($UrUsername) {
        echo 'Username is already in use.';
    } else {
   
        $EmployeeModel->addEmployee($first_name, $last_name, $email, $phone, $address, $department, $position, $salary, $date_hired, $status);

  
        $employeeId = $conn->lastInsertId();

     
        $UserModel->addUser($username, $password, $role, $employeeId);

        $_POST = [];
    }
}

ob_end_flush();