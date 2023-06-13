<?php
session_start(); 
if(!isset($_SESSION["EMAIL"]))
header('Location: signin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/style.css">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <div style="display: flex;align-items: center;"><img src="https://cdn-icons-png.flaticon.com/512/364/364089.png" alt="image" width="50px">&nbsp;&nbsp;<h3>WTA LAB</h3></div>
        <a href="./logout.php" id="logout"><button>logout</button></a>
    </nav>
    <div class="home">
        <h2>Hello <span><?php $username = $_SESSION["EMAIL"]; print_r(explode('@',$username)[0]); ?></span></h2>
    </div>
</body>
</html>