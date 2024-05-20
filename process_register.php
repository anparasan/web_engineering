<?php
include 'includes/db.php';
include 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        if (registerUser($conn, $title, $first_name, $last_name, $postcode, $email, $telephone, $password)) {
            header('Location: login.php');
        } else {
            echo "Error: Could not register user.";
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>
