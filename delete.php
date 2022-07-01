<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
else{
    include('connection.php');
    $deleteid=$_GET['deleteId'];
    $sql="DELETE from student where studId='$deleteid'";
    $query=mysqli_query($conn,$sql);
    if($query){
        header('location:display.php');
    }
}
?>