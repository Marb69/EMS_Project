

<?php


$page = $_GET['page'] ?? 'login';


switch ($page) {

    case 'login':

        include './auth/login_page.php';

        break;

    case 'admin';

       include './view/admin.php';
        break;

    case 'employee_pf':

        include './view/employee_pf.php';

        break;

    default:
        echo 'Page Not Found';
}
?>