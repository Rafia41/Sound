<?php
require("connection.php");

$deletee = $_GET['deleteId'];
$queryy = "DELETE FROM `album` WHERE `Album_Id` = '$deletee'";
$run = mysqli_query($conn, $queryy);

if($run)
{
    header("location:albumlist.php");
}

if($_SESSION['user_role']=='user'){
    header("location:dashboard.php");
  }
?>