<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Profile</h2>
<p><strong> Name:</strong> <?php echo $_SESSION['name']; ?></p>
<p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
<p><a href="logout.php">logout</a></p>

<?php
if ($_SESSION['email'] === 'admin@example.com') {
    echo '<p><a href="admin.php">   go to Admin</a></p>';
}
?>

</body>
</html>