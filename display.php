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
        <style>
            table tr th{
                padding: 20px;
                color: brown;
                background-color: whitesmoke;
                font-size: 20px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
    table tr td{
        font-size: 20px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding: 20px;
    color: brown;
    background-color: white;
 
            }
    table tr td .btn2{
    width: 80px;
    height: 40px;
    border: 2px solid green;
    background-color: white;
    border-radius: 2px;
    font-size: 20px;
    transition: .2s;
    cursor: pointer;
            }
            table tr td .btn2:hover{
              color: green;
                 }
            table tr td .btn3{
                width: 80px;
    height: 40px;
    border: 2px solid brown;
    background-color: white;
    border-radius: 2px;
    font-size: 20px;
    transition: .2s;
    cursor: pointer;
            }
            table tr td .btn3:hover{
              color: red;
                 }
        </style>
        <link rel="stylesheet" href="style.css">
        <title>Display</title>
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
     
        <table border="1" style="margin-left: 30%; margin-top:7%;">
            <tr> <th>studId</th>  <th>studName</th> <th>studAge</th>  <th>studDepartment</th>  <th>operation</th></tr>
            <?php
             include('connection.php');
             $sql="SELECT * FROM student";
             $select=mysqli_query($conn,$sql);
             if(mysqli_num_rows($select)>0){
                while($row=mysqli_fetch_assoc($select)){
                    $sid=$row['studId'];
                echo "<tr> <td>$row[studId]</td> <td>$row[studName]</td> <td>$row[studAge]</td> <td>$row[studDepartment]</td>
                <td><a href='update.php?updateId=$sid'> <button class='btn2'>Update</button></a>  <a href='delete.php?deleteId=$sid'> <button class='btn3'>Delete</button></a></td>
                </tr>";
                }
             }
            ?>
        </table>
    
  
    </body>
    </html>
    <?php
}
?>