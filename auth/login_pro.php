<?php

include "../config/db.php";

session_start();


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php?page=login');
    exit();
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

try {
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user']    = $user['username'];
        $_SESSION['role']    = $user['role'];
        $_SESSION['user_id'] = $user['employee_id'];

        $redirect = $user['role'] === 'admin' ? 'admin' : 'employee_pf';
        header("Location: ../index.php?page={$redirect}");
        exit();

    } else {
      
        header('Location: ../index.php?page=login&error=invalid');
        exit();
    }

} catch (PDOException $e) {
  
    error_log($e->getMessage()); 
    header('Location: ../index.php?page=login&error=server');
    exit();
}