<?php
require("connection.php");   
   
// if(!isset($_SESSION["user_name"]))
// {
//  header("location:login.php");
// }

$getArtist = "SELECT * FROM `artists`";
$run = mysqli_query($conn , $getArtist);


$getgenre = "SELECT * FROM `genre`";
$run1 = mysqli_query($conn , $getgenre);
$fetch1 = mysqli_fetch_assoc($run1);

$getYear = "SELECT * FROM `years`";
$run3 = mysqli_query($conn , $getYear);
$fetch3 = mysqli_fetch_assoc($run3);

$getAlbum = "SELECT * FROM `album`";
$run4 = mysqli_query($conn , $getAlbum);
$fetch4 = mysqli_fetch_assoc($run4);

if(isset($_POST['submit'])){

    $user = $_POST['audio_name'];
    $alb = $_POST['audio_album'];
    $imgname = $_FILES['audio_image']['name'];
    $imgpath = $_FILES['audio_image']['tmp_name'];
    move_uploaded_file($imgpath ,"img/".$imgname);
    $gen = $_POST['audio_genre'];
    $release = $_POST['audio_year'];
    $selection = $_POST['artist_select'];
    if(isset($_FILES['audio']))
    {
        $audiofile = $_FILES['audio']['name'];
        $audiotmpname = $_FILES['audio']['tmp_name'];
        $audiotype = $_FILES['audio']['type'];
        $audioeerr = $_FILES['audio']['error'];
  
        $allowedext = array("mp3","wav","mp4","flac","wma");
  
        $ext = explode('.', $audiofile);
        $audioext=strtolower(end($ext));
        if(in_array( $audioext,$allowedext )===false)
        {
            $errors[]= "This extension isn't allowed";
        }
  
        if(empty($errors)==true)
        {
            move_uploaded_file( $audiotmpname , "audio/".$audiofile); 
        }

    $insertt = "INSERT INTO `audio`(`Audio_Name`, `Audio_Album_Id`, `Audio_Image`, `Audio_Genre_Id`, `Audio_Year_Id`, 
    `Audio_Artist_Id`, `Audio_Audio`) 
    VALUES ('$user','$alb','$imgname','$gen','$release','$selection','$audiofile')";
    $run2 = mysqli_query($conn , $insertt);
    
    if($run2)
    {
    header("location:musiclist.php");
    }
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

    <title>Music</title>

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

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
</div>
<div class="card-body">

<form method="POST" enctype ="multipart/form-data">
<div class="row">
    
<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Audio Name:</label>
<input type="text" class="form-control" name="audio_name" id="exampleFormControlInput1">
</div>
</div>

<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Album Name:</label>
<select class="form-control" class="form-control" name="audio_album" aria-label="exampleFormControlInput1">

<?php
while($fetch4= mysqli_fetch_assoc($run4))
{
?>
<option value="<?php echo $fetch4['Album_Id']?>"><?php echo $fetch4['Album_Name']?></option>
<?php } ?>
</select>
</div>
</div>

<div class="col-6">
<div class="mb-4">
<label for="exampleFormControlInput1" class="form-label">Audio Image</label>
<input type="file" class="form-control p-1" name="audio_image" id="exampleFormControlInput1">
</div>
</div>

<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Genre</label>
<select class="form-control" class="form-control" name="audio_genre" aria-label="exampleFormControlInput1">

<?php
while($fetch1= mysqli_fetch_assoc($run1))
{
?>
<option value="<?php echo $fetch1['Genre_Id']?>"><?php echo $fetch1['Genre_Type']?></option>
<?php } ?>
</select>

</div>
</div>

<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Year</label>
<select class="form-control" name="audio_year" aria-label="exampleFormControlInput1">

<?php
while($fetch3= mysqli_fetch_assoc($run3))
{
?>
<option value="<?php echo $fetch3['Year_Id']?>"><?php echo $fetch3['Year_Name']?></option>
<?php } ?>
</select>
</div>
</div>


<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Artist Name</label><br>
<select class="form-control" name="artist_select" aria-label="exampleFormControlInput1">

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
<label for="exampleFormControlInput1" class="form-label">Audio Song</label>
<input type="file" class="form-control p-1" name="audio" id="exampleFormControlInput1">
</div>
</div>

<button class="btn btn-danger d-flex m-auto" name="submit">SUBMIT</button>
</form>

</div>
</div>
</div>
 </div>
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