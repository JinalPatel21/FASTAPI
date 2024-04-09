<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jd1.png" rel="icon">
  <link href="assets/img/jd1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
  .note {
    color: #F4A460;
    font-size: 20px;
  }

  .success-msg {
    position: relative;
    top: 140px;
    font-size: 35px;
    text-align: center;
    background-color: #90EE90;
    color: black;
    font-family: 'Poppins';
  }
</style>

<body>
  <form name="frm" method="post">
    <?php
    session_start();
    include("connect.php");
    $uid = $_SESSION['id'];
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
      extract($_POST);
      if (isset($_REQUEST['silver']))
       {

        $qty = $_REQUEST['Qty'];
        $si = $qty * 90;
        $en = mysqli_query($a, "INSERT INTO `tiffin_detail`(`uid`,`tiffin`,`Qty`,`tot`) VALUES('$uid','Silver','$qty','$si')");
    ?>
        <div class="success-msg">
          <?php

          echo "Success!!";
          ?>
        </div>
      <?php
        $id = $_SESSION['id'];
      }
       elseif (isset($_REQUEST['gold'])) 
       {
        $q1 = $_REQUEST['Q1'];
        $go = $q1 * 110;
        $e1 = mysqli_query($a, "INSERT INTO `tiffin_detail`(`uid`,`tiffin`,`Qty`,`tot`) VALUES('$uid','Gold','$q1','$go')");
      ?>
        <div class="success-msg">
          <?php
          echo "Success!!";
          ?>
        </div>
      <?php
        $id = $_SESSION['id'];
      } 
      elseif (isset($_REQUEST['premium'])) 
      {
        $q2 = $_REQUEST['Q2'];
        $pre = $q2 * 150;
        $e2 = mysqli_query($a, "INSERT INTO `tiffin_detail`(`uid`,`tiffin`,`Qty`,`tot`) VALUES('$uid','Premium','$q2','$pre')");
      ?>
        <div class="success-msg">

          <?php

          echo "Success!!";
          ?>
        </div>
    <?php
        $id = $_SESSION['id'];
      }
    }
    ?>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.php">HR's Kitchen</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/jd1.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Back</a></li>&nbsp;
            <li><a class="nav-link scrollto active" href="Myprofile.php">My Profile</a></li>&nbsp;
            <li><a class="nav-link scrollto active" href="bill.php">My Order</a></li>&nbsp;
            <li><a class="nav-link scrollto active" href="index.php" name="Logout">Logout</a></li>&nbsp;
            <?php
            if (isset($_REQUEST['Logout'])) {
              session_destroy('id');
            }
            ?>



      </div>
    </header><!-- End Header -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">

      <div class="container" data-aos="fade-up">
        <br> <br> <br> <br>

        <h3><?php
            $i = mysqli_query($a, "SELECT * from `ktry` where id=$uid");
            $row = mysqli_fetch_array($i);
            $r = mysqli_num_rows($i);
            if ($r == 1) {
              echo "Hello," . $row[1];
            }
            ?>
        </h3>
        <div class="section-title">

          <p>Different Menus</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>Silver</span>
              <h4>₹ 90</h4>
              <p>The quantity of Silver Menu will serve only 1 person.</p>
              <br>
              <div class="group">
                <input type="submit" name="silver" class="input" value="Order Now " id="in" /> &nbsp; &nbsp;<select name="Qty">
                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                </select>


              </div>
            </div>

          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>Gold</span>
              <h4>₹ 110</h4>
              <p>The quantity of Gold Menu will serve approx. 2 people.
              </p>
              <br>
              <div class="group">
                <input type="submit" name="gold" class="input" value="Order Now " /> &nbsp; &nbsp;<select name="Q1">
                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                </select>



              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>Premium</span>
              <h4> ₹ 150</h4>
              <p>The quantity of Premium Menu will serve approx. 4 people.</p>
              <br>
              <div class="group">
                <input type="submit" name="premium" class="input" value="Order Now" />&nbsp; &nbsp;<select name="Q2">
                  <option value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="3"> 3 </option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <p>Check Our Advanced Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Monday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Tuesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Wedenesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Thurday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Friday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Saturday</a>
              </li>

            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p class="fst-italic">Our Menu As Below:</p>
                    <form>
                      <table>
                        <?php
                        $i = mysqli_query($a, "SELECT * from `admin_menu` where days='Monday'");
                        $row = mysqli_fetch_array($i);
                        $r = mysqli_num_rows($i);
                        if ($r == 1)
                         {
                          echo "<td>$row[2]</td>";
                        }
                        ?>
                      </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">

                    <p class="fst-italic">Our Menu As Below :</p>
                    <table>
                        <?php
                        $i = mysqli_query($a, "SELECT * from `admin_menu` where days='Tuesday'");
                        $row = mysqli_fetch_array($i);
                        $r = mysqli_num_rows($i);
                        if ($r == 1)
                         {
                          echo "<td>$row[2]</td>";
                        }
                        ?>
                      </table>
                      
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p class="fst-italic">Our Menu As Below :</p>
                    <table>
                        <?php
                        $i = mysqli_query($a, "SELECT * from `admin_menu` where days='Wednesday'");
                        $row = mysqli_fetch_array($i);
                        $r = mysqli_num_rows($i);
                        if ($r == 1)
                         {
                          echo "<td>$row[2],Suji ka Halwa</td>";
                        }
                        ?>
                      </table>
                  </div>

                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">

                    <p class="fst-italic">Our Menu as Below:</p>
                    <table>
                        <?php
                        $i = mysqli_query($a, "SELECT * from `admin_menu` where days='Thursday'");
                        $row = mysqli_fetch_array($i);
                        $r = mysqli_num_rows($i);
                        if ($r == 1)
                         {
                          echo "<td>$row[2]</td>";
                        }
                        ?>
                      </table>
                  </div>

                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p class="fst-italic">Our Menu As Below:</p>
                    <table>
                        <?php
                        $i = mysqli_query($a, "SELECT * from `admin_menu` where days='Friday'");
                        $row = mysqli_fetch_array($i);
                        $r = mysqli_num_rows($i);
                        if ($r == 1)
                         {
                          echo "<td>$row[2]</td>";
                        }
                        ?>
                      </table>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p class="fst-italic">Our Menu As Below:</p>
                    <table>
                        <?php
                        $i = mysqli_query($a, "SELECT * from `admin_menu` where days='Saturday'");
                        $row = mysqli_fetch_array($i);
                        $r = mysqli_num_rows($i);
                        if ($r == 1)
                         {
                          echo "<td>$row[2]</td>";
                        }
                        ?>
                      </table>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="note">
          Note: The Menu will be changed every week and we are providing one sweet every Wedenesday.
                Also Salad, Buttermilk will be included in the meal everyday.This are included in the price.
        </div>
      </div>
    </section><!-- End Specials Section -->



    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>HR's Kitchen</h3>
                <p>
                  Block no.6,kalvibid,Bhavnagar, <br>
                  Gujarat,India<br><br>
                  <strong>Phone:</strong> +91 9106744002<br>
                  <strong>Email:</strong> hrkitchen23@gmail.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Menus</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="  .html"> & Condition </a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="Privacy.html">Privacy policy</a></li>
              </ul>
            </div>
  </form>

  </div>

  </div>
  </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>HR's Kitchen</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
      Designed by Jinal And Diya.
    </div>
  </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>




</body>

</html>