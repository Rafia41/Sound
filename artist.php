<?php
include("shared/nav.php");
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
}

</style>


<section>
<div class="breadcumb-area" 
style="background-image: url(img/bg-img/1.jpg); background-size: 100%;">
<div class="bradcumbContent">
<h2>ARTISTS</h2>
</div>
</div>
</section>


<section>
<div class="about-us-area section-padding-100-0" 
style="background-image: url(img/bg5.jpg); background-size: 1400px; background-repeat: no-repeat">
<div class="container">
<div class="row-artist ">

<?php
require("shared/connection.php");
$queryy = "SELECT * FROM `artists`";
$run = mysqli_query($conn,$queryy);

while($data=mysqli_fetch_array($run))
{?>


<div class="col p-5">

<div class="card ml-4 p-2" style="width:420px; height: 420px !important; padding:10px; 
background-image: url(img/bg5.jpg); background-size: 1100px; background-repeat: no-repeat">

<a href="song.php?Id=<?php echo $data['Artist_Id']?>">
<img src="admin/img/<?php echo $data['Artist_Image']?>"></a>

  <div class="card-body text-center p-2">
    <h5 class="card-title"><?php echo $data['Artist_Name']?></h5>
    <p class="card-text"><?php echo $data['Artist_Genre']?></p>
    <!-- <a href="#" class="btn btn-primary">ADD REVIEWS </a> -->
  </div>
</div>
</div>

<?php } ?>

</div>
</div>

</section>

<?php
include("shared/footer.php");
?>
