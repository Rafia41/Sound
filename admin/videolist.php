<?php
   require("connection.php");
   
   if(!isset($_SESSION["user_name"]))
   {
       header("location:login.php");
   }
   
   $video= "SELECT * FROM `video`";
   $run = mysqli_query($conn , $video);
   $fetch = mysqli_fetch_assoc($run);
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
            <div class="container-fluid">
               <div class="card shadow mb-4 mt-4 ">
                  <div class="card-header py-2 p-2">
                     <a href="video.php" class="btn btn-danger">Add New Music Video</a>
                  </div>
                  <div class="card-body">
                     <table class="table m-0">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th class="text-center">Thumbnail</th>
                              <!-- <th>Year</th> -->
                              <th>Genre</th>
                              <th>Artist Name</th>
                              <th>Video</th>
                              <!-- <th>Update</th> -->
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php while( $fetch=mysqli_fetch_assoc($run)) {?>
                           <tr>
                              <td><?php echo $fetch['Vid_Id'];?></td>
                              <td><?php echo $fetch['Vid_Name'];?></td>
                              <td><img src="img/<?php echo $fetch['Vid_Thumbnail']?>" width="170px" height="100px"></td>
                              <td><?php echo $fetch['Vid_Genre_Id'];?></td>
                              <td><?php echo $fetch['Vid_Artist_Id'];?></td>
                              <td><?php echo $fetch['Vid_Video'];?></td>
                              
                              <!-- <td>
                                 <a class="btn btn-success"  href="videoupdate.php?updateId=<?php echo $fetch['Vid_Id']?>">Update</a>
                              </td> -->
                              <td>
                                 <a class="btn btn-danger" href="videodelete.php?deleteId=<?php echo $fetch['Vid_Id']?>">Delete</a>
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
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/datatables-demo.js"></script>
   </body>
</html>