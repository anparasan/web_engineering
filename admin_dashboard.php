<?php
session_start();
require 'config.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch number of users
$user_count_query = "SELECT COUNT(*) AS user_count FROM users";
$user_count_result = $conn->query($user_count_query);
$user_count = $user_count_result->fetch_assoc()['user_count'];

// Fetch user details
$user_query = "SELECT * FROM users";
$user_result = $conn->query($user_query);
$users = $user_result->fetch_all(MYSQLI_ASSOC);

// Fetch user activities
$activity_query = "SELECT user_activities.*, users.first_name, users.last_name FROM user_activities JOIN users ON user_activities.user_id = users.id";
$activity_result = $conn->query($activity_query);
$activities = $activity_result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Admin Dashboard</h1>
    <h3>Total Number of Users: <?php echo $user_count; ?></h3>

    <h3>Registered Users</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['title'] ?></td>
                <td><?= $user['first_name'] ?></td>
                <td><?= $user['last_name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['telephone'] ?></td>
                <td><?= $user['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h3>User Activities</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>Activity</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($activities as $activity): ?>
            <tr>
                <td><?= $activity['id'] ?></td>
                <td><?= $activity['user_id'] ?></td>
                <td><?= $activity['first_name'] . ' ' . $activity['last_name'] ?></td>
                <td><?= $activity['activity'] ?></td>
                <td><?= $activity['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
