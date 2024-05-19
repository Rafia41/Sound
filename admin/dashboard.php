<?php
   include("connection.php");
   if(!isset($_SESSION["user_name"]))
   {
       header("location:index.php");
   }
?>

<?php 
$query1 ="select count(*) as artist from artists";
$result1 =mysqli_query($conn,$query1);
$data1=mysqli_fetch_assoc($result1);

$query2 ="select count(*) as gen from genre";
$result2 =mysqli_query($conn,$query2);
$data2=mysqli_fetch_assoc($result2);

$query3 ="select count(*) as song from songs";
$result3 =mysqli_query($conn,$query3);
$data3=mysqli_fetch_assoc($result3);

$query4 ="select count(*) as alb from album";
$result4 =mysqli_query($conn,$query4);
$data4=mysqli_fetch_assoc($result4);

$query5 ="select count(*) as art from artistindex";
$result5 =mysqli_query($conn,$query5);
$data5=mysqli_fetch_assoc($result5);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Dashboard</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <?php
            include("_sidebar.php");
            
            ?>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Navbar -->
               <?php
                  include("_navbar.php");
                  ?>
               <!-- End of Navbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                     <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                       Artists
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <span class="counter"><?php echo $data1['artist'] ?></span>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="bi bi-person-check fa-3x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                       Genre
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <span class="counter"><?php echo $data2['gen'] ?></span>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                    <i class="bi bi-list-check fa-3x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                       Audio Songs
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <span class="counter"><?php echo $data3['song']?></span>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="bi bi-file-music-fill fa-3x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-info text-uppercase mb-1">Albums
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                             <span class="counter"><?php echo $data4['alb']?></span></div>
                                       </div>
                                       <div class="col">
                                          <div>
                                             <!-- <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="bi bi-journal-album fa-3x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               
                     <!-- Pending Requests Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                       Video Songs
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                 </div>
                                 <div class="col-auto">
                                    <!-- <i class="fas fa-comments fa-3x text-gray-300"></i> -->
                                    <i class="bi bi-camera-video-fill fa-3x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- Content Row -->
                  <!-- End of Topbar -->
                  <!-- Begin Page Content -->
                  <!-- <div class="container-fluid">
                     <a href="product.php" class="btn btn-primary" style="margin-bottom: 20px;">Add New Artist</a>
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th>Audio Id</th>
                                       <th>Audio Name</th>
                                       <th>Album Name</th>
                                       <th>Audio Year</th>
                                       <th>Audio Genre</th>
                                       <th>Album Image</th>
                                       <th>Ar_Catg_Id</th>
                                       <th>Update</th>
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                 <tr>
                                       <th>Audio Id</th>
                                       <th>Audio Name</th>
                                       <th>Album Name</th>
                                       <th>Audio Year</th>
                                       <th>Audio Genre</th>
                                       <th>Album Image</th>
                                       <th>Ar_Catg_Id</th>
                                       <th>Update</th>
                                       <th>Delete</th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                                    <?php while($data= mysqli_fetch_assoc($run)){?>
                                    <tr>
                                       <td><?php echo $data['Audio_Id'];?></td>
                                       <td><?php echo $data['Audio_Name'];?></td>
                                       <td><?php echo $data['Album_Name'];?></td>
                                       <td><?php echo $data['Audio_Year'];?></td>
                                       <td><?php echo $data['Audio_Genre'];?></td>
                                       <td><img src="/AdminPanel/img/<?php echo $data['Album_Image']?>" width="100px" height="100px"></td>
                                       <td><?php echo $data['Ar_Catg_Id '];?></td>
                                       <td>
                                           <a class="btn btn-primary" href="update.php?updateId=<?php echo $data['Audio_Id']?>">Update</a>
                                       </td>
                                       <td>
                                           <a class="btn btn-danger" href="delete.php?deleteId=<?php echo $data['Audio_Id']?>">Delete</a>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     </div> -->
                  <!-- /.container-fluid -->
               </div>
               <!-- End of Main Content -->
               <!-- Footer -->
               <?php
                  include("_footer.php")
                  ?>
               <!-- End of Footer -->
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
                     <span aria-hidden="true">×</span>
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
<!-- End of Main Content -->
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
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
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
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>