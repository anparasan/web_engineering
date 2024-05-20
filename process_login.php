<?php
include 'includes/db.php';
include 'includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = loginUser($conn, $email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['first_name'];
        header('Location: dashboard.php');
    } else {
        echo "Invalid email or password.";
    }
}
?>
