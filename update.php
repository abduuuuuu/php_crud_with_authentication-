<?php
include('connection.php');
$updateid=$_GET['updateId'];
if(isset($_POST['update'])){
    $studId=$_POST['sid'];
    $studName=$_POST['sname'];
    $studAge=$_POST['sage'];
    $studDepartment=$_POST['sdepartment'];
    $sql="UPDATE student SET studId='$studId',studName='$studName',studAge='$studAge',studDepartment='$studDepartment' where studId='$updateid'";
    $query=mysqli_query($conn,$sql);
    if($query){
        header('location:display.php');
    }
}
?>
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
        <title>Add </title>
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
     <div class="content1">
     <form action="" method="POST">
        <h1>Update user</h1>
        <div class="input">
            <span>studId:</span>
            <input type="number" name="sid" required>
        </div>

        <div class="input">
            <span>sName:</span>
            <input type="text" name="sname" required>
        </div>

        <div class="input">
            <span>sAge: </span>
            <input type="number" name="sage" required>
        </div>
        <div class="input">
            <span>sDep : </span>
            <input type="text" name="sdepartment" required>
        </div>

        <input  type="submit" name="update" value="update" class="btn" > <br> <br>
       
    </form>
     </div>
    </body>
    </html>
    <?php
}
?>