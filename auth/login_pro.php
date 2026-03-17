<?php



include "../config/db.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


try {

    $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':username' => $username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && $user['password'] == $password) {


        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['user_id'] = $user['id'];


        if ($user['role'] == "admin") {

            header('location: ../index.php?page=admin');

            exit;
        } elseif ($user['role'] == 'employee') {

            header('location: ../index.php?page=employee_pf');
            exit;
        }
    } else {


        header('location: ../index.php?page=login');
        exit;
    }
} catch (PDOException $e) {

    echo "ERRR: " . $e;
}
