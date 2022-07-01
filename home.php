<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Home</title>
    </head>
    <body>
      <nav class="nav">
        <div class="logo">Admin</div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="add.php">Add</a></li>
            <li><a href="display.php">Display</a></li>
        </ul>
        <a href="logout.php"><button class="btn2">Logout</button></a>
      </nav>
      <div class="content">
        <H1>Welcome</H1> <h2><?= $_SESSION['user'] ?></h2>  
        <p>You are authorized to add,see,update and delete user's data!</p>
      </div>
    </body>
    </html>
    <?php
}
?>