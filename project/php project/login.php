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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($name, $userEmail, $userPass) = explode("|", $line);
        if ($email === $userEmail && $password === $userPass) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $userEmail;
            header("Location: profile.php");
            exit;
        }
    }
    $error = "your email is incorrect";
}
?>

<h2>submit</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    Emai: <input type="email" name="email"><br><br>
     Password: <input type="password" name="password"><br><br>
    <button type="submit">login</button>
</form>
<p><a href="register.php">Register</a></p>

</body>
</html>