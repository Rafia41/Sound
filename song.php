<?php
include("shared/connection.php");
$Id=$_GET['Id'];
?>

<!-- $audio ="SELECT Artist_Name FROM artists WHERE Artist_Id = '$Id'";
$run = mysqli_query($conn , $audio);
$fetch = mysqli_fetch_array($run);

$audio1 = "SELECT * FROM audio WHERE Audio_Id = '$Id'";
$run1 = mysqli_query($conn , $audio1);
$fetch1 = mysqli_fetch_array($run1);

$getgenre = "SELECT * FROM `genre`";
$run2 = mysqli_query($conn , $getgenre);
$fetch2 = mysqli_fetch_assoc($run2);
   
$getyear = "SELECT * FROM `years`";
$run3 = mysqli_query($conn , $getyear);
$fetch3 = mysqli_fetch_assoc($run3); -->
   
<style>
    @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap");
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    @import url("https://fonts.googleapis.com/css2?family=Ysabeau+SC&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@300&family=Ysabeau+SC&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap");

    .row-artist
{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding:10px;
  margin:10px;
}

.card-body
{
    height: 230px;
}

.col {
    padding: 40px;
    margin: 10px;
    display: flex;
    margin-left: 0;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
}

.card-title
{
  font-family: 'Ysabeau Infant';
  font-size:30px; 
    margin-top: 15px;
    text-align: center ;
    color:black;
    font-weight: bold;
}

.card-text
{
    font-family: 'Ysabeau Infant';
    font-size:25px;
    margin-top: -50px;
    text-align: center ;
    
}

.music-genre
{
  font-family: 'Ysabeau Infant';
    /* font-size:30px; */
    margin-top: -30px;
    text-align: center ;
    /* font-weight: bold; */
}

.music-year
{
  font-family: 'Ysabeau Infant';
    /* font-size:30px; */
    margin-top: -20px;
    text-align: center ;
    /* font-weight: bold; */
}

.audio-player
{
    margin-top: 10px;
    margin-left:100px;
}

.breadcumb-area
  {
    position: relative;
    z-index: 10;
    width: 100%;
    height: 107px;
    }
    .breadcumb-area .bradcumbContent {
    position: absolute;
    width: 392px;
    font-family: 'Ysabeau Infant';
    font-size:25px;
    height: 90px;
    bottom: -39px;
    color:white;
    left: 50%;
    margin-left: -196px;    background: #2b0101;
    background: -webkit-linear-gradient(to right, #8f0813, #3f0303);
    background: linear-gradient(to right, #cc1515, #b41e2b);
    text-align: center ; }


</style>

<!-- <div class="breadcumb-area" 
style="background-image: url(img/bg-img/1.jpg); background-size: 100%;">
<div class="bradcumbContent">
<h2>Songs</h2>
</div>
</div> -->


<body style="background-image: url(img/bg8.jpg); background-size: 1800px; background-repeat: no-repeat">
    

<div class="about-us-area section-padding-100-0">

<div class="container">
<div class="row-artist">
<div class="col">

<?php 

$audio = "SELECT audio.Audio_Name, album.Album_Name, genre.Genre_Type, years.Year_Name, 
artists.Artist_Name, audio.Audio_Image, audio.Audio_Audio, audio.Audio_Id FROM 
((((audio 
INNER JOIN album ON audio.Audio_Album_Id =album.Album_Id
INNER JOIN genre ON audio.Audio_Genre_Id=genre.Genre_Id
INNER JOIN years ON audio.Audio_Year_Id=years.Year_Id
INNER JOIN artists ON audio.Audio_Artist_Id = artists.Artist_Id)))) WHERE `Audio_Artist_Id` = '$Id' ";

$run=mysqli_query($conn, $audio);
// $fetch=mysqli_fetch_array($run);
while($fetch=mysqli_fetch_array($run))
{
?>

<div class="col">
<div class="card" style="background-image: url(img/bg5.jpg); background-size: 600px; background-repeat: no-repeat">

<!-- <a href="song.php?Id=<?php echo $fetch['Song_Id']?>"> -->
<img src="admin/img/<?php echo $fetch['Audio_Image']?>" width="510px"  height= "420px"></a>

  <div class="card-body p-5">
    <h5 class="card-title"><?php echo $fetch['Audio_Name']?></h5>
    <p class="card-text"><?php echo $fetch['Artist_Name']?></p>
    <p class="music-genre"><?php echo $fetch['Genre_Type'] ?></p>
  <p class="music-year"><?php echo $fetch['Year_Name'] ?></p>

<audio class="audio-player" controls>
  <source src="admin/audio/<?php echo $fetch['Audio_Audio']?>" type="audio/mp3">
</audio>

</div>
</div>
</div>

<?php } ?>

</div>
</div>
</div>
</div>
</body>


<!-- <?php
include("shared/footer.php");
?> -->
