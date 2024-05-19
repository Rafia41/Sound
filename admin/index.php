<?php
   require("connection.php");
   
   
   if(isset($_POST['Login']))
   {
   
       $uname = $_POST['uname'];
       $upass = $_POST['password'];
       
       $queryy = "SELECT `Admin_Id`, `Admin_Name`, `user_role`,`user_image` FROM `admin` WHERE Admin_Name = '$uname' AND Admin_Pass = '$upass'";
       $run = mysqli_query($conn , $queryy);
    //    $row = mysqli_fetch_array($run);
       if(mysqli_num_rows($run)>0)
       {
        while($fetch = mysqli_fetch_assoc($run)){
           $_SESSION['user_name']= $fetch['Admin_Name'];
           $_SESSION['userid']= $fetch['Admin_Id'];
           $_SESSION['user_role']= $fetch['user_role'];
           $_SESSION['user_image']= $fetch['user_image'];
           header("location: dashboard.php");
        }
       }
       else
       {
   echo "<p class='text-center text-light fw-bold fs-1'>Login Denied!</p>";
   header("location: login.php");
       }
   }


   if(isset($_SESSION["user_name"]))
   {
       header("location:dashboard.php");
   }
   ?>
<!DOCTYPE php>
<php lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Sound-Login</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body class="bg-danger" style="background-image: url(img/register.jpg); background-size: 140%;">
      <div class="container mt-5">
         <!-- Outer Row -->
         <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
               <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" style="background-image: url(img/12.jpg); background-size: 94%;"></div>
                        <div class="col-lg-6" style="background-color:#880808">
                           <div class="p-5">
                              <img src="img/navlogo.png" style="width:150px; height:75px; margin-top:-40px; padding: 15px; margin-left:90px;">
                              <div class="text-center">
                                 <h1 class="h4 text-white mb-4">Welcome Back!</h1>
                              </div>
                              <form class="user" method="POST">
                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       id="exampleInputEmail" aria-describedby="emailHelp" name="uname" placeholder="Enter User Name...">
                                 </div>
                                 <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                       id="exampleInputPassword" name="password" placeholder="Password">
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                       <input type="checkbox" class="custom-control-input" id="customCheck">
                                       <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-danger btn-user btn-block" name="Login">Login</button>
                              </form>
                              <hr>
                              <div class="text-center">
                                 <a class="small text-white" href="forgot-password.php">Forgot Password?</a>
                              </div>
                              <div class="text-center">
                                 <a class="small text-white" href="register.php">Create an Account!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
   </body>
</php>