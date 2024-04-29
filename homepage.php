<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,#f3e5e5,#ffc9f6);
        }
        .header {
            background-color: aqua;
            background-size: cover;
            padding: 20px;
            text-align: center;
            background:linear-gradient(to right,#f3e5e5,#8d177a);
        }
        .content {
            text-align: center;
            padding: 100px 0;
        }
        .name {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .logout-btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: rgb(125,125,235);
        }
        h1{
            color: black ;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Your Website</h1>
    </div>
    <div class="content">
        <div class="name">
            <?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
            ?>
        </div>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
