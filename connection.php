<?php
$conn=mysqli_connect('localhost','root','','logindb');
if(!$conn){
    die("connection failed".mysqli_connect_error($conn));
}
?>