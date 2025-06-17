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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($fullname == "" || $email == "" || $password == "") {
        $error = "all input shoul not be empty   !";
    } else {
        $line = $fullname . "|" . $email . "|" . $password . PHP_EOL;
        file_put_contents("users.txt", $line, FILE_APPEND);
        $success = " the registration has been seccesfuly!";
    }
}
?>

<h2>Register</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
<form method="POST">
     full name: <input type="text" name="fullname"><br><br>
    email: <input type="email" name="email"><br><br>
     password: <input type="password" name="password"><br><br>
    <button type="submit">register</button>
</form>
<p><a href="login.php"> go to account </a></p>

</body>
</html>