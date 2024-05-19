<?php
include("shared/nav.php");
?>

<style>


.containers
{
  width:550px;
  height:100%;
  margin-left:10px;
}

.pic
{
  box-shadow: 6px 6px 7px #888888;
  width:300px;
  height:300px;
  position: relative;
  overflow: hidden;
  margin-top:100px;
  margin-left:135px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.pic:before
{
  content: '';
  margin-top:-30px;
  margin-left:-50px;
  position: absolute;
  width: 360px;
  height: 360px;
  background: url('https://images-platform.99static.com//9BrJtqqbdZ16KIMTlZcWzy63K5Q=/0x0:960x960/fit-in/500x500/projects-files/110/11035/1103539/ed467496-8414-453f-987c-c12b843c0306.png') center center;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.pic:hover , .box1:hover , .box2:hover , .social1:hover , .social2:hover , .social3:hover 
{
  box-shadow: 3px 3px 7px #888888;
  cursor:pointer;
}

.box1
{
  box-shadow: 6px 6px 7px #888888;
  width:100px;
  height:100px;
  position: relative;
  overflow: hidden;
  margin-top:-124px;
  margin-left:16px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.box1:before
{
  content: '';
  margin-top:-25px;
  margin-left:-31px;
  position: absolute;
  width: 200px;
  height: 200px;
  background: url('http://creek.themebucket.net/wp-content/uploads/2015/09/8.jpg') center center;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.box2
{
  box-shadow: 6px 6px 7px #888888;
  position: relative;
  overflow: hidden;
  width:194px;
  height:99px;
  margin-top:14px;
  margin-left:78px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.box2:before
{
  
  content: '';
  margin-top:-74px;
  margin-left:-31px;
  position: absolute;
  width: 300px;
  height: 300px;
  background: url('http://i-cdn.phonearena.com/images/articles/220901-image/Here-is-how-the-start-screen-of-Google-Maps-looks-like.jpg') center center;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.social1
{
  box-shadow: 6px 6px 7px #888888;
  width:80px;
  height:80px;
  background-color:#3b5998;
  margin-top:-57px;
  margin-left:305px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.social1 > i
{
  font-size:60px;
  margin-top:13px;
  margin-left:20px;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  color:#ffffff;
}

.social2
{
  box-shadow: 6px 6px 7px #888888;
  width:80px;
  height:80px;
  background-color:#C73B6F;
  margin-top:-142px;
  margin-left:370px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.social2 > i
{
  font-size:60px;
  margin-top:8px;
  margin-left:13px;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  color:#ffffff;
}

.social3
{
  box-shadow: 6px 6px 7px #888888;
  width:80px;
  height:80px;
  background-color:#000000;
  margin-top:-143px;
  margin-left:435px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.social3 > i
{
  font-size:60px;
  margin-top:9px;
  margin-left:9px;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  color:#ffffff;
}

.content
{
  height:100%;
  width:500px;
}

p
{
  font-family: 'Open Sans Condensed', sans-serif;
}

h2
{
  font-family: 'Dancing Script', cursive;
}

.contentHead
{
  font-family: 'Open Sans Condensed', sans-serif;
  font-size:60px;
  font-weight:500;
  text-decoration:underline;
}

sup
{
  font-family: 'Open Sans Condensed', sans-serif;
  font-style: italic;
  font-size:smaller;
}

span
{
  color:pink;
}

.row
{
    display: -webkit-box;
    display: -ms-flexbox;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;

}


</style>
<div class="breadcumb-area" style="background-image: url(img/bg-img/1.jpg); background-size: 100%;">
<div class="bradcumbContent">
<h2>About</h2>
</div>
</div>

<div class="bg-gradients"></div>
<br>
<br>
<br>
<div class="row">
<div class="containers col-lg-6" style="margin-left: 60px;">
  
  <div class="pic">
  </div>
  
  <div class="box1"></div>
  <div class="box2"></div>
  
  <div class="social1">
    <i class="fa fa-facebook" aria-hidden="true"></i> 
  </div>
  <div class="social2">
  <i class="fa fa-dribbble" aria-hidden="true"></i>
  </div>
  <div class="social3">
    <i class="fa fa-codepen" aria-hidden="true"></i>
  </div>
</div>

<div class="content col-md-offset-6 col-lg-offset-6">

  <h2>Hi Folks, <br/><br/>
    This is Team Sound.<br>
    This is a music website, that provides you amazing music according to you moods.
    <br> 
   Show your L<span>&hearts;</span>VE if you like our Website.
    <br/>
    <h2>Team Sound! <br/><br/>
  </h2>
</div>
</div>   
<br>
<br>


<?php include("shared/footer.php");?>