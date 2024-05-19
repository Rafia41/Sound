<?php
session_start();
if(!isset($_SESSION["user_email"]))
{
    header("location:login.php");
}
include("shared/nav.php");
?>

<head>
<style>

@import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&amp;family=Satisfy&amp;display=swap");
@import url("https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Josefin+Sans&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap");
html,
body
{
	height: 100%;
	font-family: "Nunito Sans", sans-serif;
	-webkit-font-smoothing: antialiased;
}

h1,h2,h3,h4,h6 
{
	margin: 0;
	color: #222222;
	font-family: "Nunito Sans", sans-serif;
	font-weight: 700;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
	line-height: 1.4;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 30px;
}


h6 {
	font-size: 16px;
}

p {
	font-size: 15px;
	color: #c4c4c4;
	line-height: 1.7;
}

img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
}

ul {
	padding: 0;
	margin: 0;
}

@media (min-width: 1200px) {
	.container {
		max-width: 1200px;
	}
}

/*---------------------
   Helper CSS
 -----------------------*/

.section-title {
	margin-bottom: 50px;
}

@media only screen and (min-width: 768px) and (max-width: 991px),
only screen and (min-width: 576px) and (max-width: 767px),
(max-width: 576px) {
	.section-title {
		margin-bottom: 15px;
	}
}

.section-title .sub-title {
/* font-family: 'Playfair', serif; */
/* font-family: 'Sacramento', cursive; */
/* font-family: 'Bagel Fat One', cursive; */
    font-family: 'Quicksand', sans-serif;
	color: #000000;
	font-size: 80px;
	margin-top: 20px;
    margin-left: 290px;
	padding: 20px;

}

.section-title h2 {
	text-transform: uppercase;
	color: #fff;
}

@media (max-width: 576px) {
	.section-title h2 {
		font-size: 24px;
	}
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #000;
}


/*---------------------
   Hero section
 -----------------------*/

.hero__section {
	height: 500px ;
	padding-top: 10px;
	position: relative;
	z-index: 5;
	
}

@media (max-width: 576px),
only screen and (min-width: 576px) and (max-width: 767px) {
	.hero__section {
		padding-top: 200px;
		height: 900px;
	}
}

.hero__slider {
	max-width: 750px;
}

@media (max-width: 576px) {
	.hero__slider .owl-nav {
		text-align: center;
	}
}

.hero__slider button.owl-prev,
.hero__slider button.owl-next {
	width: 50px;
	height: 50px;
	border-radius: 50%;
	background: rgba(0, 0, 0, 0.5) !important;
	margin-right: 10px;
	font-size: 20px !important;
}

.hero__items {
	padding-bottom: 52px;
}

@media (max-width: 576px) {
	.hero__items {
		text-align: center;
		padding: 52px 25px;
	}
}

.hero__items span {
	font-family: "Satisfy", cursive;
	font-size: 34px;
}

.hero__items h2 {
	font-size: 80px;
	font-weight: 800;
	text-transform: uppercase;
	margin-bottom: 10px;
}

@media (max-width: 576px) {
	.hero__items h2 {
		font-size: 34px;
	}
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
	.hero__items h2 {
		font-size: 45px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.hero__items h2 {
		font-size: 60px;
	}
}

.hero__items p {
	max-width: 600px;
	margin-bottom: 30px;
}

.about__section {
	background-color: #0c0617;
	margin-top: 20px;
	position: relative;
	z-index: 2;
}

.about__section:before {
	position: absolute;
	content: "";
	width: 100%;
	height: 50%;
	left: 0;
	top: -528px;
	background-color: #0c0617;
	z-index: 4;
}

@media (max-width: 576px),
only screen and (min-width: 576px) and (max-width: 767px),
only screen and (min-width: 768px) and (max-width: 991px) {
	.about__section:before {
		height: 1505px;
		background-image: url("../img/about-overlay.png");
		background-repeat: no-repeat;
		background-position: center top;
	}
}

.about__section .container {
	position: relative;
	z-index: 10;
}

.discography__section {
	/* z-index: 6; */
	/* margin-top: -406px;
	padding-top: 475px;
	padding-bottom: 50px; */
}

.discography__section:after {
	position: absolute;
	content: "";
	width: 100%;
	height: 1505px;
	left: 0;
	top: -940px;
	z-index: 5;
}

@media (max-width: 576px),
only screen and (min-width: 576px) and (max-width: 767px),
only screen and (min-width: 768px) and (max-width: 991px) {
	.discography__section:after {
		display: none;
	}
}

.about__text {
	padding-top: 260px;
}

@media (max-width: 576px),
only screen and (min-width: 576px) and (max-width: 767px),
only screen and (min-width: 768px) and (max-width: 991px) {
	.about__text {
		padding-top: 30px;
	}
}

.about__text span {
	font-family: "Satisfy", cursive;
	color: #e922e9ff;
	font-size: 30px;
	margin-bottom: 5px;
}

.about__text h2 {
	color: #fff;
	text-transform: uppercase;
	margin-bottom: 15px;
}

.about__text p {
	margin-bottom: 40px;
}

.album__card {
	text-align: center;
	margin-bottom: 40px;
}

.album__card img {
	margin: 0 auto 25px;
	border-radius: 50%;
}

.album__card h4 {
	color: #fff;
}

.album__card p {
	color: #c4c4c4;
	margin-bottom: 0;
}

.row-songs
{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding:10px;
  margin-left:-20px;
}

</style>
</head>

<section class="hero-area">
<div class="single-hero-slide d-flex align-items-center justify-content-center">

<div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>

<div class="hero-slides-content text-center">
<h2 data-animation="fadeInUp" data-delay="100ms">SOUND <span>SOUND</span></h2>
<p data-animation="fadeInUp" data-delay="300ms">Feel the beat</p>
</div>

<h2 class="big-text">SOUND</h2>
</div>

<div class="bg-gradients"></div>
<div class="bg-gradients"></div>
</section>

<section class="discography__section" style="background-image: url(img/bg6.jpg); background-size: 1850px; background-repeat: no-repeat">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<div  class="sub-title" style="color: #FFFFFF;font-family: 'Quicksand', sans-serif;">New Releases</div>
</div>
</div>


<div class="row-songs">
<div class="col-m-6 col-sm-6">
<div class="album__card">
<a href="indexmusic.php"><img class="zoom" src="img/artist/rahat.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Ankhain</h4>
<a href="#" style="color: #FFFFFF;">- Rahat Fateh Ali Khan</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/atif.jpeg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Mangan Aiyaan</h4>
<a href="#" style="color: #FFFFFF;">- Atif Aslam</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/arijit.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Apna Bana Le</h4>
<a href="#" style="color: #FFFFFF;">- Arijit Singh</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/darshu.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Piya Re</h4>
<a href="#" style="color: #FFFFFF;">- Darshan Raval</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/bill.jpeg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Hotline</h4>
<a href="#" style="color: #FFFFFF;">- Billie Eilish</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/asim.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Bulleya</h4>
<a href="#" style="color: #FFFFFF;">- Asim Azhar</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/mit.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Alfaazo</h4>
<a href="#" style="color: #FFFFFF;">- Mitraz</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/talha.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Desperation</h4>
<a href="#" style="color: #FFFFFF;">- Talha Anjum</p>
</div>
</div>

</div>
</div>
</div>
</section>
</section>

<div class="bg-gradients"></div>
<div class="bg-gradients"></div>
<div class="bg-gradients"></div>

<section class="discography__section" style="background-image: url(img/bg6.jpg); background-size: 1900px; background-repeat: no-repeat">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<div  class="sub-title" style="color: #FFFFFF; font-family: 'Quicksand', sans-serif;">Trending Now</div>
</div>
<!-- <div class="col-lg-4 text-left text-lg-right pt-4">
<a href="#" class="site__btn mb-5"><i class="fa fa-apple"></i> Buy on itunes</a>
</div> -->
</div>
<div class="row-songs">
<div class="col-lg-6">
<div class="album__card">
<a href="#">
<img class="zoom" src="img/artist/kb.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Kill Bill</h4>
<a href="#" style="color: #FFFFFF;">- SZA</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/tv.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Tere Vaaste</h4>
<a href="#" style="color: #FFFFFF;">- Varun Jain, Sachin-Jigar,</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/oliver.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Bounce</h4>
<a href="#" style="color: #FFFFFF;">- Oliver Tree</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/riar.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Obsessed</h4>
<a href="#" style="color: #FFFFFF;">- Riar Saab, Abhijay Sharma</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/shub.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Cheques</h4>
<a href="#" style="color: #FFFFFF;">- Shubh</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/p.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Pasoori</h4>
<a href="#" style="color: #FFFFFF;">- Ali Sethi x Shae Gill</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/cd.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Calm Down</h4>
<a href="#" style="color: #FFFFFF;">- Rema</p>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/f.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Introduction</h4>
<a href="#" style="color: #FFFFFF;">- Faris Shafi</p>
</div>
</div>

</div>
</div>
</div>
</section>
</section>

<div class="bg-gradients"></div>
<div class="bg-gradients"></div>
<div class="bg-gradients"></div>

<section class="discography__section" style="background-image: url(img/bg6.jpg); background-size: 1800px; background-repeat: no-repeat">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<div  class="sub-title" style="color: #FFFFFF; margin-left: 450px; font-family: 'Quicksand', sans-serif;">Artists</div>
</div>
<!-- <div class="col-lg-4 text-left text-lg-right pt-4">
<a href="#" class="site__btn mb-5"><i class="fa fa-apple"></i> Buy on itunes</a>
</div> -->
</div>
<div class="row-songs">
<div class="col-lg-6">
<div class="album__card">
<a href="#">
<img class="zoom" src="img/artist/at.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Atif Aslam</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/arijit3.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Arijit Singh</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/nusrat.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Nusrat Fateh Ali Khan</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/rah.jpeg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Rahat Fateh Ali Khan</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/billie.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Billie Eilish</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/week.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">The Weeknd</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/dar.jpeg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Darshan Raval</h4>
</div>
</div>

<div class="col-lg-6">
<div class="album__card">
<a href="#"><img class="zoom" src="img/artist/yo.jpg" style="width: 400px; height:400px;">
<h4 style="color: #FFFFFF;">Honey Singh</h4>
</div>
</div>

</div>
</div>
</div>
</section>
</section>

<div class="bg-gradients"></div>
<div class="bg-gradients"></div>
<div class="bg-gradients"></div>

<?php
include("shared/footer.php");
?>