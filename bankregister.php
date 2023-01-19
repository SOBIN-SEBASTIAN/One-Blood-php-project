<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages/Bank Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
$page='bankreg';
include ("dbcon.php");
if(isset($_POST["btn1"]))
      {
        $bname=$_POST["bname"];
        $phone=$_POST["bphone"];
        $place=$_POST["bplace"];
        $city=$_POST["city"];
        $dist=$_POST["dist"];
        $pin=$_POST["pin"];
        $uname=$_POST["username"];
        $pass=md5($_POST["password"]);
        $type="bankadmin";
        if(isset($_FILES["image"])){
          $rw=$_FILES["image"]["type"];
        }
        $q=mysqli_query($con,"SELECT * FROM `login` WHERE `u_name`='$uname'");
          if(mysqli_num_rows($q)==0)
          {
            $res=mysqli_query($con,"INSERT INTO `login`(`u_name`, `pswd`, `u_type`) VALUES ('$uname','$pass','$type')");
            $res1=mysqli_query($con,"SELECT * FROM `login` WHERE `u_name`='$uname'");
            while($row=mysqli_fetch_assoc($res1))
            {
              $s_id=$row["l_id"];
            }
            $f=explode("/",$rw);
            $na=$s_id.".".$f[1];
            move_uploaded_file($_FILES["image"]["tmp_name"],"profilephotos/".$na);
            $res2=mysqli_query($con,"INSERT INTO `b_bank`( `l_id`, `b_name`, `b_phone`, `b_place`, `b_city`, `b_district`, `b_pincode`,`b_img`) VALUES ('$s_id','$bname','$phone','$place','$city','$dist','$pin','$na')");
            if($res2)
            {
              header("location: login.php");
            }
            else{
               echo '<script>alert("THIS USERNAME IS ALREADY TAKEN. PLEASE CHOOSE ANOTHER NAME.")</script>';
            }
          }
          else if(mysqli_num_rows($q)>0)
          {
            echo '<script>alert("THIS USERNAME IS ALREADY TAKEN. PLEASE CHOOSE ANOTHER NAME.")</script>';
          }

      }
?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">OneBlood</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 "  method="post" action="#" enctype="multipart/form-data">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Blood Bank Name</label>
                      <input type="text" name="bname" class="form-control" id="bname" onblur="">
                      <div id="ebname" class="badge border-warning border-1 text-warning"></div>
                    </div> 

                   <div class="col-6">
                      <label for="phone" class="form-label">Phone Number</label>
                      <input type="text" name="bphone" class="form-control" id="bphone" onblur="" >
                      <div id="vphone" class="badge border-warning border-1 text-warning"></div>
                    </div>

                    <div class="col-6">
                      <label for="bplace" class="form-label">Place</label>
                      <input type="text" name="bplace" class="form-control" id="bplace">
                      <div class="badge border-warning border-1 text-warning">
                  	  </div>
                    </div>

                    <div class="col-6">
                      <label for="city" class="form-label">City</label>
                      <input type="text" name="city" class="form-control" id="city" >
                      <div class="badge border-warning border-1 text-warning"></div>
                    </div>


                    <div class="col-6">
                      <label for="dist" class="form-label">District</label>
                      <select class="form-select" name="dist" id="dist"> 
                            <option value="">Select ..</option>
                            <option value="Alappuzha" >Alappuzha</option>
                            <option value="Ernakulam" >Ernakulam</option>
                            <option value="Idukki" >Idukki</option>
                            <option value="Kannur" >Kannur</option>
                            <option value="kasargod" >Kasargod</option>
                            <option value="Kollam" >Kollam</option>
                            <option value="Kottayam" >Kottayam</option>
                            <option value="Kozhikode" >Kozhikode</option>
                            <option value="Malappuram" >Malappuram</option>
                            <option value="Palakkad" >Palakkad</option>
                            <option value="Pathanamthitta" >Pathanamthitta</option>
                            <option value="Thiruvananthapuram" >Thiruvananthapuram</option>
                            <option value="Thrissur" >Thrissur</option>
                            <option value="Wayanad" >Wayanad</option>
                      </select>
                      <div class="badge border-warning border-1 text-warning"></div>
                    </div> 
                    <div class="col-6">
                      <label for="city" class="form-label">Pin Code</label>
                      <input type="text" name="pin" class="form-control" id="pin" >
                      <div class="badge border-warning border-1 text-warning"></div>
                    </div>

                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" >
                        <div class="badge border-warning border-1 text-warning"></div>
                      </div>
                    </div>

                    <div class="col-6">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                      <div class="badge border-warning border-1 text-warning"></div>
                    </div>
                    <div class="col-6">
                      <label for="" class="form-label">Image</label>
                          <input type="file" name="image" class="">
                        </div>
                    <div class="col-12">
                      <input type="submit" name="btn1" class="btn btn-primary w-100" value="Create Account" >
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="page">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>
              <script type="text/javascript">
                function validatename(){
                  let name = document.forms["regbank"]["bname"].value;
                  if (name == "") {
                    document.getElementById("ebname").innerHTML = "Blood Bank Name must be filled out!";
                    return false;
                  }
                  else if (! name.match(/^[a-zA-Z]$/))
                  {
                    document.getElementById("ebname").innerHTML = "Blood Bank Name must contain only alphabets and space";
                    return false;                    
                  }
                  else
                  {
                    return true;
                  }
                  
                }
                function validatephone(){
                  let x = document.forms["regbank"]["bphone"].value;
                  if (x == "") {
                    document.getElementById("vphone").innerHTML = "Phone Number must be filled out!";
                  }
                  else if (!x.match("/^[0,9]{10}$/"))
                  {
                    document.getElementById("vphone").innerHTML = "Invalid Phone Number";
                    
                  }
                  return false;
                }
              </script>

              <div class="credits">
                Designed by <a href="">One Blood</a>
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>