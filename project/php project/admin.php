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
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@example.com') {
    die("you dont alowe to this page");
}

$users = file("users.txt", FILE_IGNORE_NEW_LINES);
?>

<h2>Admin Panel</h2>
<table border="1" cellpadding="8">
    <tr>
        <th> Name</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user): 
        list($name, $email, $pass) = explode("|", $user); ?>
        <tr>
            <td><?php echo htmlspecialchars($name); ?></td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<p><a href="profile.php">back to profile</a></p>

</body>
</html>