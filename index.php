<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="registerform">
        <p id="regtitle"> LOGIN </p>
        <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Username" id="field">
        <br>
        <input type="password" name="password" placeholder="Password" id="field">
        <br>
        <input type="submit" name="login" value="Login" id="submit">
        </form>
    </div>
    <div class="passwordsheet">
        <p> Sean || Username: Xian Shizukana || Password: 12345 </p>
        <br>
        <p> Simon || Username: Letris || Password: 98765 </p>
        <br>
        <p> Ramick || Username: Fate || Password: microwaveispowa </p>
    </div>
</body>
</html>

<?php

function login_alert() {
    echo"<script>alert('Invalid Credentials!')</script>";
}
    if(isset($_POST["login"])){


        if($_POST["username"] == "Xian Shizukana" && $_POST["password"] == "12345"){
            $_SESSION["username"] = "Xian Shizukana";
            header("Location: home.php");
        } else
        if($_POST["username"] == "Letris" && $_POST["password"] == "98765"){
            $_SESSION["username"] = "Letris";
            header("Location: home.php");
        } else
        if($_POST["username"] == "Fate" && $_POST["password"] == "microwaveispowa"){
            $_SESSION["username"] = "Fate";
            header("Location: home.php");
        } else
        {
            login_alert();
        }
    }
?>

