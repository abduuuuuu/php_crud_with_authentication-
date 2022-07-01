<?php
session_start();
include('connection.php');
if(isset($_POST['login'])){
    $userName=$_POST['uname'];
    $passWord=$_POST['pass'];
    $sql="SELECT * from adminn where username='$userName'";
    $select=mysqli_query($conn,$sql);
    if(mysqli_num_rows($select) > 0){
     while($row=mysqli_fetch_assoc($select)){
        $dbusername=$row['username'];
        $dbpassword=$row['password'];
        if( password_verify($passWord,$dbpassword)){
            $_SESSION['user']=$userName;
            header('location:home.php');
        }
        else{
            echo '<script> alert("wrong password or username") </script>';
        }
     }
    }
    else{
        echo '<script> alert("wrong password or username") </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <h1>login</h1>
        <div class="input">
            <span>username:</span>
            <input type="text" name="uname" required>
        </div>

        <div class="input">
            <span>password:</span>
            <input type="password" name="pass" required>
        </div>
        <input  type="submit" name="login" value="login" class="btn" > <br> <br>
        <div class="footi"><span>No account ?</span> <a href="register.php">register</a></div> 
    </form>
</body>
</html>