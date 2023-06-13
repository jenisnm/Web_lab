<?php 
    require 'config.php'; 
    if(isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $result = $conn->query("SELECT EMAIL FROM register WHERE EMAIL='$email'");
        if($result->num_rows <1) {
            if($conn->query("INSERT INTO register(EMAIL,PASSWORD) VALUES ('$email','$password')")==TRUE) {
                header("Location: signin.php?success=true");
                
            }
            else {
                echo "<script>alert('Registration Unsuccessful')</script>";
            }
        }
        else {
            echo "<script>alert('Email already exists');</script>";
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/style.css">
    <script src="./static/js/script.js"></script>
    <script src="https://kit.fontawesome.com/fb666382f6.js" crossorigin="anonymous"></script>
    
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>SignUp</h1>
            <br>
            <form action="./signup.php" method="POST" onsubmit="return handlesignup()">
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
                <label for="password">Confirm Password</label>
                <br>
                <div class="password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="conpassword" name="conpassword" placeholder="Enter the password">
                </div>
                <div id="conpasserr">&nbsp;</div>
                <div class="submit" style="text-align: center;">
                    <button type="submit" name="submit" id="submit">Sign Up</button>
                </div>
                <br>
                <div class="signup">
                    <h4 style="font-weight:normal;">Already have an account?<a href="./signin.php"><br>Sign In</a></h4>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>