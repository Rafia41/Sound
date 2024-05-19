
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
  </style>
  
  <!-- Sidebar -->
  <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
        <img src="img/navlogo.png" style="width:105px; margin-left: 2px; padding: 0px;" alt="">
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt "></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- Nav Item - Pages Collapse Menu -->


<li class="nav-item">

<!-- <a class="nav-link collapsed nav-link" href="category.php" >
<i class="bi bi-boxes"></i>
        <span>Category</span>
    </a> -->

    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="category.php">Artist</a>
            <a class="collapse-item" href="genre.php">Genre</a>
            <a class="collapse-item" href="year.php">Year</a>
            <a class="collapse-item" href="albumlist.php">Album</a>
            <a class="collapse-item" href="artistindex.php">Artist Index</a>
            <!-- <a class="collapse-item" href="song.php">Songs</a> -->
            <!-- <a class="collapse-item" href="album.php">User Type</a> -->
        </div>
    </div>
<a class="nav-link collapsed nav-link" href="artistlist.php" >
    <i class="bi bi-person-check-fill"></i>
        <span>Artist</span>
    </a>

    <a class="nav-link collapsed" href="musiclist.php" >
    <i class="bi bi-music-note"></i>
        <span>Music</span>
    </a>

    <a class="nav-link collapsed" href="songlist.php" >
    <i class="bi bi-music-note-beamed"></i>        
    <span>Audio Songs</span>
    </a>

    <a class="nav-link collapsed" href="videolist.php">
    <i class="bi bi-camera-video"></i>
        <span>Video Songs</span>
    </a>

    <!-- <?php if($_SESSION['user_role']=='admin'){?>
    <a class="nav-link collapsed" href="user.php">
    <i class="bi bi-person-square"></i>
        <span>Users</span>
    </a>
    <?php } ?> -->

    <!-- <a class="nav-link collapsed" href="#" >
    <i class="bi bi-journal-album"></i>
        <span>Albums</span>
    </a> -->

    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="product.php">Products</a>
            <a class="collapse-item" href="category.php">Category</a>
        </div>
    </div> -->
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- <div class="sidebar-heading">
    Addons
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.php">404 Page</a>
            <a class="collapse-item" href="blank.php">Blank Page</a>
        </div>
    </div>
</li> -->

<!-- <li class="nav-item">
    <a class="nav-link" href="table.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li> -->

<!-- Divider
<hr class="sidebar-divider d-none d-md-block"> -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->