<?php
include "shared/config.php";
include "shared/header.php";
$id=$_GET['id'];
?>
 <!-- Wrapper Start -->
 <div class="wrapper">
 <?php include "navbar.php"; ?>
      
      <!-- Page Content  -->

      
<div id="content-page" class="content-page">
<div class="container-fluid">
<div class="row">

<?php 
$album="SELECT * from artist ar JOIN audio au On ar.artist_id = au.audio_fk_artist_id 
join album al on au.audio_fk_album_id=al.album_id join year ye on au.audio_fk_year_id=ye.year_id 
where album_id='$id' LIMIT 1;";
$runalbum=mysqli_query($conn, $album);
$row=mysqli_fetch_array($runalbum);?>

<div class="col-lg-12">
<div class="iq-card">
<div class="iq-card-body">
<div class="row">
<div class="col-lg-4">
<img src="album images/<?php echo $row['album_image'];?>" class="img-fluid w-100" alt="">
</div>

<div class="col-lg-8">
<div class="d-flex align-items-top justify-content-between iq-music-play-detail">
<div class="music-detail">
<h3><?php echo $row['album_name'] ?></h3>
<span><?php echo $row['artist_name'] ?></span>
                                 
</div>
                            
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-12">
<div class="iq-card">
<div class="iq-card-body">
<ul class="list-unstyled iq-music-slide mb-0">
<?php
$quer="SELECT * from artist ar JOIN audio au On ar.artist_id = au.audio_fk_artist_id 
join album al on au.audio_fk_album_id=al.album_id join year ye on au.audio_fk_year_id=ye.year_id where album_id='$id';";
$run=mysqli_query($conn,$quer);
while($row=mysqli_fetch_array($run)){?>

<li class="mb-3">
<div class="media align-items-center col-10 col-md-5">
<div class="iq-realese-song ">
<a href="javascript:void(0);"><img src="album images/<?php echo $row['album_image'];?>"class="img-border-radius avatar-60 img-fluid" alt=""></a>
</div>

<div class="media-body ml-3">
<p class="mb-0"><?php echo $row['audio_name'] ?></p>
<small><?php echo $row['artist_name'] ?></small>
</div>
</div>
                        
<p class="mb-0 col-md-2 col-md-2 iq-musc-icone"><a href="review-audio.php?id=<?php echo $row['audio_id'] ?>"><i class="lar la-star font-size-20"></i></a></p>
<audio  controls>
  <source src="songs/<?php echo $row['audio_audio'] ?>" type="audio/mp3">
</audio>
                          
</div>
</li>
<?php } ?>
</ul>

</div>
</div>
</div>
</div>
</div>
</div>
</div>


</body>
</html>