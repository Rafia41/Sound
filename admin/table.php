<?php
require("connection.php");

$queryy = "SELECT * FROM `artistdetails`";
$run = mysqli_query($conn , $queryy);
$fetch = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
<h2 class="text-center fw-bold">Artist Details</h2>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>

<th>Artist Id</th>
<th>Genre Id</th>
<th>Year Id</th>
<th>Album Id</th>

</thead>
<tbody>

<td><?php echo $fetch['Artist_Id'];?></td>
<td><?php echo $fetch['Genre_Id'];?></td>
<td><?php echo $fetch['Year_Id'];?></td>
<td><?php echo $fetch['Album_Id'];?></td>
<td>

<a class="btn btn-success" href="update.php?updateId=<?php echo $fetch['Audio_Id']?>">Update</a>
</td>
<td>
<a class="btn btn-danger" href="delete.php?deleteId=<?php echo $fetch['Audio_Id']?>">Delete</a>

</td>
</tr>

</tbody>
</table>
</div>

    
</body>
</html>