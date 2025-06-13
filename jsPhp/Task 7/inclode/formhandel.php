<?php

//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["LastName"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    echo "these are the data ,that the user submitted";

   echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;
} 
else{
    header("Location: ../index.php");
}

?>


