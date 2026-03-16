<?php

session_start();



include './middleware/auth_check.php';



if (isset($_SESSION['user'], $_SESSION['role']) && $page === 'login') {


    if ($_SESSION['role'] == 'admin') {
        header("Location: index.php?page=admin");
        exit;
    } elseif ($_SESSION['role'] == 'employee') {

        header("Location: index.php?page=employee_pf");
        exit;
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Css/main.css">
    <link rel="shortcut icon" href="./favicon/favicon.ico" type="image/x-icon">
    <title><?= $page ?></title>
</head>

<body data-page="<?= $page ?>">
    <?php

    $page = $_GET['page'] ?? 'login';


    function require_role($role)
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] != $role) {
            header("Location: index.php?page=dashboard");
            exit();
        }
    }

    switch ($page) {
        case 'login':
            include './auth/login_page.php';
            break;

        case 'dashboard':
            if ($_SESSION['role'] == 'admin') {
                include './view/admin.php';
            } else {
                include './view/employee_pf.php';
            }
            break;

        case 'employee_pf':
            require_role('employee');
            include './view/employee_pf.php';
            break;

        case 'admin':
            require_role('admin');
            include './view/admin.php';
            break;

        default:
            include './view/404.php';
    } ?>



    <script type="module" src="./assets/Js/main.js"></script>




</body>

</html>