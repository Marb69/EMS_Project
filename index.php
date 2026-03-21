<?php


session_start();


require_once './config/db.php';
require_once './model/Department.php';
require_once './model/Employee.php';
require_once './model/Position.php';
require_once './model/User.php';


include './controller/PostionController.php';



$page = $_GET['page'] ?? 'login';

include './middleware/auth_check.php';


function require_role(string $role): void
{
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
        header('Location: index.php?page=login');
        exit();
    }
}


if (isset($_SESSION['user'], $_SESSION['role']) && $page === 'login') {
    $redirect = $_SESSION['role'] === 'admin' ? 'admin' : 'employee_pf';
    header("Location: index.php?page={$redirect}");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Css/main.css">
    <link rel="shortcut icon" href="./favicon/favicon.ico" type="image/x-icon">
    <title><?= htmlspecialchars($page) ?></title>
</head>

<body data-page="<?= $page ?>">

    <?php switch ($page) {
        case 'login':
            include './auth/login_page.php';
            break;

        case 'dashboard':
          
            $view = ($_SESSION['role'] ?? '') === 'admin' ? 'admin' : 'employee_pf';
            include "./view/{$view}.php";
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