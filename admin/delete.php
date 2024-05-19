<?php
require("connection.php");

$deletee = $_GET['deleteId'];
$queryy = "DELETE FROM `audio` WHERE `Audio_Id` = '$deletee'";
$run = mysqli_query($conn, $queryy);

if($run)
{
    header("location:musiclist.php");
}

if($_SESSION['user_role']=='user'){
    header("location:dashboard.php");
  }
?>