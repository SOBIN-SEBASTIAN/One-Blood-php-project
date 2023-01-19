<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
  $name=$_SESSION['username'];
}
else{
  header("location: login.php");
}
include("dbcon.php");
$rzt=mysqli_query($con,"SELECT * FROM `login` WHERE `u_name`='$name'");
$rw=mysqli_fetch_array($rzt);
?>
<header id="header" class="header fixed-top d-flex align-items-center">
   <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">OneBlood</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
           <?php
            if($rw["u_type"]=="admin"){
              echo"<img src='assets/img/profile-img.jpg' alt='Profile' class='rounded-circle'>";
            }
            elseif ($rw["u_type"]=="user") {
              $sql="SELECT `l_id` FROM `login` WHERE `u_name`='$name'";//FETCHING LOGIN ID FROM LOGIN TABLE
                    $rh=mysqli_query($con,$sql);
                    $rm1=mysqli_fetch_array($rh);
                    $l=$rm1["l_id"];
                    $im=mysqli_query($con,"SELECT * FROM `image` WHERE `l_id`='$l'");
                    $t=mysqli_fetch_array($im);
                    if($t){
                    $p=$t['img_name'];
                    echo"<img src='profilephotos/$p' alt='Profile' class='rounded-circle'>";
                  }
            }
            elseif ($rw["u_type"]=="bankadmin") {
              $sql="SELECT `l_id` FROM `login` WHERE `u_name`='$name'";//FETCHING LOGIN ID FROM LOGIN TABLE
                    $rh=mysqli_query($con,$sql);
                    $rm1=mysqli_fetch_array($rh);
                    $l=$rm1["l_id"];
                    $im=mysqli_query($con,"SELECT `b_img` FROM `b_bank` WHERE `l_id`='$l'");
                    $t=mysqli_fetch_array($im);
                    $p=$t['b_img'];
                    echo"<img src='profilephotos/$p' alt='Profile' class='rounded-circle'>";
            }
            ?>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $name; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->