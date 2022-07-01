<?php
include('connection.php');
if(isset($_POST['register'])){
    $userName=$_POST['uname'];
    $passWord=password_hash($_POST['pass'],PASSWORD_DEFAULT) ;
    $email=$_POST['email'];
    $sql="INSERT INTO adminn(username,password,email) values ('$userName','$passWord','$email')";
    $query=mysqli_query($conn,$sql);
    if($query){
        header('location:login.php');
    }
    else{
        die(mysqli_error($conn));
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
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Register</h1>
        <div class="input">
            <span>username:</span>
            <input type="text" name="uname" required>
        </div>

        <div class="input">
            <span>password:</span>
            <input type="password" name="pass" required>
        </div>

        <div class="input">
            <span>emailllllll:</span>
            <input type="email" name="email" required>
        </div>
        <input  type="submit" name="register" value="register" class="btn" > <br> <br>
       <div class="foot"><span>already have an account ?</span> <a href="login.php">login</a></div> 
    </form>
</body>
</html>