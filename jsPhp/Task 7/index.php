<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
       <div class="form">
       <form action="inclode/formhandel.php" method="post">

<label for="firstname">FirstName</label><br>
<input type="text" name="firstname" id="firstname" placeholder="First name..."><br>

<label for="LastName">LastName</label><br>
<input type="text" name="LastName" id="LastName" placeholder="Last name..."><br>

<label for="favouritepet">favourite pet</label><br>

<select name="favouritepet" id="favouritepet"><br>
    <option value="none">None</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="bird">Bird</option>
</select><br>


<button type="submit">Submit</button>
</form>
       </div>
    </main>
</body>
</html>