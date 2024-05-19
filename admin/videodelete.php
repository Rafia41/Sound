<?php
require("connection.php");

$deletee = $_GET['deleteId'];
$queryy = "DELETE FROM `video` WHERE `Video_Id` = '$deletee'";
$run = mysqli_query($conn, $queryy);

if($run)
{
    header("location:songlist.php");
}
?>