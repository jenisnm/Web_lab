<?php
session_start();
require 'config.php';

if(isset($_GET["success"]))
    echo "<script>alert('Registration Successful')</script>";

if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $conn->query("SELECT * FROM register WHERE EMAIL = '$email' AND PASSWORD = '$password'");
    if($result->num_rows === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["EMAIL"] = $row["EMAIL"];
    }

    if(isset($_SESSION["EMAIL"])) {
        header("Location: index.php");
        exit(0);
    }
    else {
        header("Location: signin.php");
        exit(0);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/style.css">
    <script src="./static/js/script.js"></script>
    <script src="https://kit.fontawesome.com/fb666382f6.js" crossorigin="anonymous"></script>
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>SignIn</h1>
            <br>
            <form action="./signin.php" method="POST" onsubmit="return handlesignin()">
                <label for="email">Email</label>
                <br>
                <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" id="email" name="email" placeholder="Enter the email" required>
                </div>
                <div id="emailerr">&nbsp;</div>
                <label for="password">Password</label>
                <br>
                <div class="password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Enter the password" required>
                </div>
                <div id="passerr">&nbsp;</div>
                
                <div class="submit" style="text-align: center;">
                    <button type="submit" name="submit" id="submit">Sign In</button>
                </div>
                <br>
                <div class="signup">
                    <a href="./signup.php">Create an account</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>