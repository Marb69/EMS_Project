<?php

$section = $_GET['section'] ?? 'overview';

switch ($section) {
    case 'overview':

        include './controller/GetEmployeeController.php';
        include './view/page/dashboard.php';
        break;

    case 'employees':
        include './controller/DepartmentController.php';
        include './controller/AddEmployeeController.php';
        include './controller/GetEmployeeController.php';
        include './view/page/employee.php';
        break;

    case 'departments':
        include './view/page/department.php';
        break;

    case 'position':
        include './view/page/position.php';
        break;

    case 'user':
        include './view/page/user.php';
        break;

    case 'add_employee':

        include './controller/AddEmployeeController.php';
        include './view/page/addFormEmployee.php';
        break;

    default:
        http_response_code(404);
        include './view/404.php';
}
