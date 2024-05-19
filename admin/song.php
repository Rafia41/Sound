<?php
require("connection.php");   
   
// if(!isset($_SESSION["user_name"]))
// {
//  header("location:login.php");
// }

$getArtist = "SELECT * FROM `artists`";
$run = mysqli_query($conn , $getArtist);
$fetch = mysqli_fetch_array($run);

if(isset($_POST['submit'])){

    $songname = $_POST['song_name'];
    $artistname = $_POST['artist_name'];
    $imgname = $_FILES['audio_image']['name'];
    $imgpath = $_FILES['audio_image']['tmp_name'];
    move_uploaded_file($imgpath ,"img/".$imgname);
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

    $insertt = "INSERT INTO `songs`(`Song_Name`, `Song_Artist_Id`, `Song_Image`, `Song_Audio`) 
    VALUES ('$songname','$artistname','$imgname','$audiofile')";
    $run2 = mysqli_query($conn , $insertt);
    
    if($run2)
    {
    header("location:songlist.php");
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
<input type="text" class="form-control" name="song_name" id="exampleFormControlInput1">
</div>
</div>

<div class="col-6">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Artist Name</label><br>
<select class="form-control" name="artist_name" aria-label="exampleFormControlInput1">

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
<input type="file" class="form-control p-1" name="audio_image" id="exampleFormControlInput1">
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

        </div>

    </div>
</body>

</html>