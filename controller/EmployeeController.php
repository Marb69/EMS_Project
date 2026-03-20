<?php
ob_start();


$EmployeeModel = new Employee($conn);
$UserModel = new User($conn);

$Employees = $EmployeeModel->getAllEmployee();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



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



    $employee = $EmployeeModel->getEmployeeByName($first_name, $last_name);


    if ($employee) {


  json_encode(['status' => 'exists', 'identifier' => $first_name . ' ' . $last_name]);

        return;
    } else {



        $EmployeeModel->addEmployee($first_name, $last_name, $email, $phone, $address, $department, $position, $salary, $date_hired, $status);
        $UserModel->addUser($username, $password, $role);
        $_POST = [];

        header('location: index.php?page=admin&section=employees');
    }
}

ob_end_flush();

?>
