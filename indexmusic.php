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
    height: 167px;
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
}

.card-text
{
    font-family: 'Ysabeau Infant';
    font-size:30px;
    margin-top: -50px;
    text-align: center ;
}

.audio-player
{
    margin-top: -20px;
    margin-left:75px;
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

<body style="background-image: url(img/bg9.jpg); background-size: 1800px; background-repeat: no-repeat">
    

<div class="about-us-area section-padding-100-0">

<div class="container">
<div class="row-artist">
<div class="col">

<?php
$song= "SELECT songs.Song_Name, songs.Song_Image,songs.Song_Audio, artists.Artist_Name FROM 
(songs 
JOIN artists ON songs.Song_Artist_Id = artists.Artist_Id)";

$run=mysqli_query($conn, $song);
while($fetch=mysqli_fetch_array($run)){
?>
<div class="col">
<div class="card" style="background-image: url(img/bg5.jpg); background-size: 600px; background-repeat: no-repeat">

<!-- <a href="song.php?Id=<?php echo $fetch['Song_Id']?>"> -->
<img src="admin/img/<?php echo $fetch['Song_Image']?>" width="510px"  height= "450px"></a>

  <div class="card-body p-5">
    <h5 class="card-title"><?php echo $fetch['Song_Name']?></h5>
    <p class="card-text"><?php echo $fetch['Artist_Name']?></p>

<audio class="audio-player" controls>
  <source src="admin/audio/<?php echo $fetch['Song_Audio']?>" type="audio/mp3">
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
