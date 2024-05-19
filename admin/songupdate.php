<?php
   require("connection.php");   
   
   if(!isset($_SESSION["user_name"]))
   {
    header("location:login.php");
   }

$getCategory = "SELECT * FROM `artists`";
$run = mysqli_query($conn , $getCategory);
// $fetch = mysqli_fetch_assoc($run);

// $getGenre = "SELECT * FROM `genre`";
// $run1 = mysqli_query($conn , $getGenre);
// $fetch1 = mysqli_fetch_assoc($run1);

$updatehonaywaliId = $_GET['updateId'];
$queryy = "SELECT * FROM `songs` WHERE `Song_Id` = '$updatehonaywaliId'";
$run2 = mysqli_query($conn , $queryy);
$fetch2 = mysqli_fetch_assoc($run2);
   
   if(isset($_POST['update'])){
   
           $name = $_POST['song_name'];
           $artist = $_POST['artist_name'];
           $imgname = $_FILES['audio_image']['name'];
           $imgpath = $_FILES['audio_image']['tmp_name'];
           move_uploaded_file($imgpath ,"img/".$imgname);

           $audiofile = $_FILES['audio_audio']['name'];
           $audiotmpname = $_FILES['audio_audio']['tmp_name'];
           move_uploaded_file( $audiotmpname , "audio/".$audiofile); 
       
           $updatee = "UPDATE `songs` SET `Song_Name`='$name',
           `Song_Artist_Id`='$artist',`Song_Image`='$imgname',`Song_Audio`='$audiofile'
           WHERE `Song_Id` = '$updatehonaywaliId'";
           $run3 = mysqli_query($conn , $updatee);
         //   $fetch3 = mysqli_fetch_assoc($run3);
      
           if($run3)
           {
           header("location:songlist.php");
           }
       }
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Update</title>
      <!-- Custom fonts for this template -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Custom styles for this page -->
      <link href="vendor/fetchtables/fetchTables.bootstrap4.min.css" rel="stylesheet">
   </head>
   <body id="page-top" class="bg-dark">
      <!-- Page Wrapper -->
      <div id="wrapper">
      <!-- Sidebar -->
      <?php
         include("_sidebar.php")
         ?>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content">
            <!-- Topbar -->
            <?php
               include("_navbar.php")
               ?>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">
               <!-- Page Heading -->
               <h1 class="h3 mb-2 text-gray-800">Update</h1>
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                  </div>
                  <div class="card-body">
                     
                  
<form method="POST" enctype ="multipart/form-data">
<div class="row">
    
<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Audio Name:</label>
<input type="text" class="form-control" name="song_name" value="<?php echo $fetch2['Song_Name']?>" id="exampleFormControlInput1">
</div>
</div>

<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Artist Name</label><br>
<select class="form-control" name="artist_name" value="<?php echo $fetch2['Artist_Id']?>" aria-label="exampleFormControlInput1">

<?php
while($fetch = mysqli_fetch_array($run))
{
?>
<option value="<?php echo $fetch['Artist_Id']?>"><?php echo $fetch['Artist_Name']?></option>
<?php } ?>
</select>

</div>
</div>


<div class="col-12">
<div class="mb-4">
<label for="exampleFormControlInput1" class="form-label">Song Image</label>
<input type="file" class="form-control p-1" value="<?php echo $fetch2['Song_Image']?>" name="audio_image" id="exampleFormControlInput1">
</div>
</div>

<div class="col-12">
<div class="mb-4">
<label for="exampleFormControlInput1" class="form-label">Audio Song</label>
<input type="file" class="form-control p-1" value="<?php echo $fetch2['Song_Audio']?>" name="audio_audio" id="exampleFormControlInput1">
</div>
</div>

<button class="btn btn-danger d-flex m-auto" name="update">Update</button>
</form>


                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
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
                  <button class="close" type="button" fetch-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" fetch-dismiss="modal">Cancel</button>
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
      <script src="vendor/fetchtables/jquery.fetchTables.min.js"></script>
      <script src="vendor/fetchtables/fetchTables.bootstrap4.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/fetchtables-demo.js"></script>
   </body>
</html>