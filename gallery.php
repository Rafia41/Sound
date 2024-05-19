<?php
include("shared/nav.php");
?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap");

    .title
    {
        font-family: 'Titillium Web', sans-serif;
        
    }


.music-player-area {
  position: relative;
  z-index: 1;
  padding-left: 5%;
  padding-right: 5%; }
  @media only screen and (max-width: 767px) {
    .music-player-area {
      padding-left: 0;
      padding-right: 0; } }

.single-music-player {
  position: relative;
  z-index: 1;
  overflow: hidden; }
  .single-music-player img {
    -webkit-transition-duration: 800ms;
    transition-duration: 800ms;
   }
  .single-music-player .music-info {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    width: 100%;
    background-color: #8B0000;
    padding: 30px; }
    @media only screen and (max-width: 767px) {
      .single-music-player .music-info {
        padding: 15px; } }
    .single-music-player .music-info h5 {
      font-size: 18px;
      color: #ffffff; }
    .single-music-player .music-info p {
      color: #ffffff;
      margin-bottom: 0;
      line-height: 1; }
  .single-music-player .music-play-icon .audioplayer {
    margin: 0;
    padding: 0;
    width: auto;
    height: auto;
    border: none;
    border-radius: 0;
    background: #a82525; }
    .single-music-player .music-play-icon .audioplayer .audioplayer-playpause {
      background-color: #ffffff; }
    .single-music-player .music-play-icon .audioplayer:not(.audioplayer-playing) .audioplayer-playpause a {
      border-top: 10px solid transparent;
      border-right: none;
      border-bottom: 10px solid transparent;
      border-left: 18px solid #ffffff; }
    .single-music-player .music-play-icon .audioplayer .audioplayer-playing .audioplayer-playpause a::before,
    .single-music-player .music-play-icon .audioplayer .audioplayer-playing .audioplayer-playpause a::after {
      background-color: #a82525; }
    .single-music-player .music-play-icon .audioplayer .audioplayer-bar,
    .single-music-player .music-play-icon .audioplayer .audioplayer-time,
    .single-music-player .music-play-icon .audioplayer .audioplayer-volume {
      display: none !important; }
  .single-music-player:hover .music-info, .single-music-player:focus .music-info {
    background-color: #4A0404; }
  .single-music-player:hover img, .single-music-player:focus img {
    -webkit-transform: scale(1.0);
    transform: scale(1.0); }

</style>

<head>

<div class="breadcumb-area" 
style="background-image: url(img/bg-img/1.jpg); background-size: 100%;">
<div class="bradcumbContent">
<h2>Global Artists</h2>
</div>
</div>

<div class="bg-gradients"></div>

<div style="background-image: url(img/footer1.jpg); background-size: 1500px; background-repeat: no-repeat">
<div  class="title" style="color: #FFFFFF; margin-left: 350px; font-family:; font-size: 80px; 
padding: 105px; margin-top: -60px; ">Global Bands</div>

<div class="section-title">

<div class="single-music-player " style="margin-top: -80px;">
<img src="img/band/1.jpg" style="width:30%; padding: 12px; margin-left: 210px;">
<video style="width:490px; vertical-align: middle; padding: 15px;" controls>
<source src="video/bayaan2.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between fs-1">
<div class="music-text">
<h5 style="font-size: 30px; margin-left: 550px;">BAYAAN</h5>
<!-- <a href="#" style="color: #ffffff">Nahin Milta</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Nahin Milta.mp3">
</audio>
</div> -->
</div>
</div>
<br>


<div class="single-music-player">

<img src="img/band/sanam.jpeg" style="width:45%; padding: 12px; margin-left: 90px">
<video style="width:500px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/sanam.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;;margin-left: 560px;">SANAM</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>

<br>

<div class="single-music-player">

<img src="img/band/maroon.jpg" style="width:46%; padding: 12px; margin-left: 20px">
<video style="width:690px; vertical-align: middle; padding: 15px; margin-left: 0px" controls> 
<source src="video/maroon.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text text-center">
<h5 style="font-size: 30px;;margin-left: 540px;">MAROON 5</h5>
<!-- <p href="#" style="color: #ffffff">Memories</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/maroon.mp3">
</audio>
</div> -->
</div>
</div>
<div class="bg-gradients"></div>



<div style="background-image: url(img/footer1.jpg); background-size: 1800px; background-repeat: no-repeat">
<div  class="title" style="color: #FFFFFF; margin-left: 260; font-family:; font-size: 70px;
padding: 75px; margin-top: -50px;">Pakistani Global Artists</div>

<div class="section-title">
<div class="single-music-player " style="margin-top: -80px;">

<img src="img/artist/nusrat1.jpg" style="width: 26%; padding: 12px; margin-left: 250px;">
<video style="width:540px; vertical-align: middle; padding: 15px;" controls>
<source src="video/nusrat.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between fs-1">
<div class="music-text">
<h5 style="font-size: 30px;; margin-left: 460px;">NUSRAT FATEH ALI KHAN</h5>
<!-- <p href="#" style="color: #ffffff">Nahin Milta</p> -->

<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Nahin Milta.mp3">
</audio>
</div> -->
</div>
</div>
</div>
<br>

<div class="single-music-player">

<img src="img/artist/atif2.jpg" style="width:40%; padding: 12px; margin-left: 170px">
<video style="width:450px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/atif.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;; margin-left: 550px;">ATIF ASLAM</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>

<br>


<div class="single-music-player">

<img src="img/artist/young.jpg" style="width:33%; padding: 12px; margin-left: 80px">
<video style="width:760px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/young.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;; margin-left: 500px;">YOUNG STUNNERS</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>

<br>

<div class="single-music-player">

<img src="img/artist/mustufa.jpg" style="width:41%; padding: 12px; margin-left: 170px">
<video style="width:330px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/mustufa.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;; margin-left: 500px;">MUSTUFA ZAHID</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>
<div class="bg-gradients"></div>
<br>



<div style="background-image: url(img/footer1.jpg); background-size: 1800px; background-repeat: no-repeat">
<div  class="title" style="color: #FFFFFF; margin-left: 300; 
font-family:; font-size: 70px; padding: 75px; margin-top: -80px;">
Indian Global Artists</div>

<div class="section-title">
<div class="single-music-player " style="margin-top: -80px;">

<img src="img/artist/arijit2.jpg" style="width: 40%; padding: 12px; margin-left: 80px;">
<video style="width:640px; vertical-align: middle; padding: 15px;" controls>
<source src="video/arijit.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between fs-1">
<div class="music-text">
<h5 style="font-size: 30px;; margin-left: 520px;">ARIJIT SINGH</h5>
<!-- <P href="#" style="color: #ffffff">Nahin Milta</p> -->
</div>
<!-- <div class="music-play-icon">
<audio controls>
<source src="audio/Nahin Milta.mp3">
</audio> -->
</div>
</div>
</div>
<br>

<div class="single-music-player">

<img src="img/artist/jubin.jpg" style="width:40%; padding: 12px; margin-left: 50px">
<video style="width:690px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/jubin.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;;margin-left: 500px;">JUBIN NAUTIYAL</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>

<br>


<div class="single-music-player">

<img src="img/artist/darshu1.jpg" style="width:30%; padding: 12px; margin-left: 280px">
<video style="width:350px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/darshu.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;;margin-left: 500px;">DARSHAN RAVAL</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>

<br>

<div class="single-music-player">

<img src="img/artist/S.jpg" style="width:33%; padding: 12px; margin-left: 60px">
<video style="width:780px; vertical-align: middle; padding: 15px;" controls> 
<source src="video/S.mp4" type="video/mp4"></video>

<div class="music-info d-flex text-center justify-content-between">
<div class="music-text">
<h5 style="font-size: 30px;;margin-left: 500px;">SHREYA GHOSHAL</h5>
<!-- <p href="#" style="color: #ffffff; font-size:20px;">Lag Jaa Gale</p> -->
</div>
<!-- <div class="music-play-icon">
<audio preload="auto" controls>
<source src="audio/Lag Ja Gale.mp3">
</audio>
</div> -->
</div>
</div>

<br>

<?php
include("shared/footer.php");
?>