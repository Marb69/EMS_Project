<?php


session_start();

$page = $_GET['page'] ?? 'login';

if (!isset($_SESSION['user'], $_SESSION['role']) && $page != 'login') {


    header('location: index.php?page=login');
    exit;
}



if (isset($_SESSION['user'], $_SESSION['role']) && $page == 'login') {


    if ($_SESSION['role'] == 'admin') {
        header("Location: index.php?page=admin");
        exit;
    } else {

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
    <link rel="stylesheet" href="./assets/Css/login.css">
    <title><?php echo $page ?></title>
</head>

<body>



 
 



<?php include './router.php' ?>



    <script type="module" src="./assets/Js/mian.js"></script>




</body>

</html>