<?php
include("shared/connection.php");
?>

<style>

    @import url("https://fonts.googleapis.com/css2?family=Ysabeau+SC&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@300&family=Ysabeau+SC&display=swap");

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
    height: 157px;
}

.col {
  padding: 37px;
    display: flex;
    /* flex-direction: row; */
    align-content: center;
    justify-content: center;
    flex-wrap: wrap;
}

.card-title
{
    font-family: 'Ysabeau Infant';
    font-size:35px;
    margin-top: 20px;
    text-align: center ;
}

.card-text
{
    font-family: 'Ysabeau Infant';
    font-size:30px;
    margin-top: -60px;
    text-align: center ;
}

.video-player
{
  margin-top: -20px;
    width: 550px;
    height: 350px;
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

<body style="background-image: url(img/bg9.jpg); background-size: 1400px; background-repeat: no-repeat;">
    

<div class="about-us-area section-padding-100-0">

<div class="container">
<div class="row-artist">
<div class="col" style="margin: -15px !important;">

<?php
$song= "SELECT video.Vid_Name, video.Vid_Thumbnail, video.Vid_Video, artists.Artist_Name FROM 
(video 
JOIN artists ON video.Vid_Artist_Id = artists.Artist_Id)";

$run=mysqli_query($conn, $song);
while($fetch=mysqli_fetch_array($run)){
?>
<div class="col">
<div class="card" style="background-image: url(img/bg5.jpg); background-size: 600px; background-repeat: no-repeat">

<!-- <img src="admin/img/<?php echo $fetch['Vid_Thumbnail']?>" width="500px"  height= "450px"></a> -->

<video class="video-player" controls>
  <source src="img/video/<?php echo $fetch['Vid_Video']?>" type="video/mp4">
</video>

<div class="card-body p-5">
    <h5 class="card-title"><?php echo $fetch['Vid_Name']?></h5>
    <p class="card-text"><?php echo $fetch['Artist_Name']?></p>
</div>

</div>
</div>
<?php } ?>

</div>
</div>
</div>
</div>
</body>
