<?php
include 'includes/db.php';
include 'includes/functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

$sql = "SELECT * FROM activities WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$activities = $stmt->get_result();
?>

<?php include 'templates/header.php'; ?>

<h2 class="text-center">User Dashboard</h2>
<p>Welcome, <?php echo htmlspecialchars($user['first_name']); ?>!</p>

<h3>Your Info</h3>
<p>Title: <?php echo htmlspecialchars($user['title']); ?></p>
<p>First Name: <?php echo htmlspecialchars($user['first_name']); ?></p>
<p>Last Name: <?php echo htmlspecialchars($user['last_name']); ?></p>
<p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
<p>Telephone: <?php echo htmlspecialchars($user['telephone']); ?></p>

<h3>Past Activities</h3>
<ul>
    <?php while ($activity = $activities->fetch_assoc()): ?>
        <li><?php echo htmlspecialchars($activity['activity']); ?> - <?php echo htmlspecialchars($activity['created_at']); ?></li>
    <?php endwhile; ?>
</ul>

<?php include 'templates/footer.php'; ?>
