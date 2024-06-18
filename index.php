<?php
  include("database.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <h1>Transport Trade Solution Ltd </h1>
    <h2>Welcome to Login Page </h2>
</head>
<body>
    <div id="form">
     
     <form action="login.php" name="form" method="POST">
     <h3>Login Page</h3>
        <label>Email:     </label>
        <input type="text" id="email" placeholder="Email"  name="email"><br><br>
        <label>Password: </label>
        <input type="Password" id="pass" placeholder="Password" name="password"><br><br>
        <input type="submit" id="btn" value="Login" name="submit">

        <p>Not Registered<a class="link" href="registration.php"><br>Register Here</a></p>
     </form>

    </div>
    
</body>
</html>