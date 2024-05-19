<?php
   require("connection.php");
   
   // if(!isset($_SESSION["user_name"]))
   // {
   //     header("location:login.php");
   // }
   
   $songs= "SELECT * FROM `songs` ";
   
   $run = mysqli_query($conn , $songs);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Music List</title>
      <!-- Custom fonts for this template -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   </head>
   <body id="page-top" class="bg-dark">
      <div id="wrapper">
      <?php
         include("_sidebar.php")
         ?>
      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
            <?php
               include("_navbar.php")
               ?>
            <div class="container-fluid ">
               <div class="card shadow mb-4 mt-4">
                  <div class="card-header">
                     <a href="song.php" class="btn btn-danger">Add New Music</a>
                  </div>
                  <div class="card-body ml--4">
                     <table class="table">
                        <thead>
                           <tr>
                              <!-- <th>Id</th> -->
                              <th>Name</th>
                              <th>Artist</th>
                              <th class="text-center">Image</th>
                              <th class="text-center">Audio</th>
                              <!-- <th>Audio</th> -->
                           
                              <th>Update</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php while( $fetch=mysqli_fetch_assoc($run)) {?>
                           <tr>
                              <!-- <td><?php echo $fetch['Song_Id'];?></td> -->
                              <td><?php echo $fetch['Song_Name'];?></td>
                              <td><?php echo $fetch['Song_Artist_Id'];?></td>
                              <td><img src="img/<?php echo $fetch['Song_Image']?>" width="270px" height="250px"></td>
                              <!-- <td><?php echo $fetch['Audio_Genre_Id'];?></td>
                              <td><?php echo $fetch['Audio_Year_Id'];?></td>
                              <td><?php echo $fetch['Audio_Artist_Id'];?></td> -->
                              <td><?php echo $fetch['Song_Audio'];?></td>
                              <td>
                                 <a class="btn btn-success"  href="songupdate.php?updateId=<?php echo $fetch['Song_Id']?>">Update</a>
                              </td>
                              <td>
                                 <a class="btn btn-danger" href="delete.php?deleteId=<?php echo $fetch['Song_Id']?>">Delete</a>
                              </td>
                           </tr>
                           <?php } ?>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- End of Content Wrapper -->
      </div>
      
   </body>
</html>