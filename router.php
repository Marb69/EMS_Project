<?php


$section = $_GET['section'] ?? 'overview'; // default section

switch ($section) {
    case 'overview':
        include './view/page/dashboard.php';
        break;

    case 'employees':
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

    default:
        echo "<p>Section not found</p>";
}
