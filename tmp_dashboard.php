
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

<body>
<form name="frm" method="post">
<?php
include("klogin_con.php");
 if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
if(isset($_REQUEST['silver']))
 {
    $silver=$_REQUEST['silver']; 
   $en=mysqli_query($w,"INSERT INTO `tmp_dash`(`tiffin`) VALUES('$silver')");
    $_SESSION['id']=$silver;
    echo"success";
    
}
elseif(isset($_REQUEST['gold']))
{
  $gold=$_REQUEST['gold'];
   $en=mysqli_query($w,"INSERT INTO `tmp_dash`(`tiffin`) VALUES('$gold')");
    $_SESSION['id']=$gold;
    echo"success";
        
}
elseif(isset($_REQUEST['premium']))
{
  $premium=$_REQUEST['premium'];
  $en=mysqli_query($w,"INSERT INTO `tmp_dash`(`tiffin`) VALUES('$premium')");
  $_SESSION['id']=$premium; 
  echo"success";
}
else
{
  echo "Select the order";
}

//header("location:index.php");    
}
?>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">HR's Kitchen</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

    </div>
  </header><!-- End Header -->
<br><br><br><br><br>


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            
            <p>Different Menus</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span>Silver</span>
                <h4>₹ 90</h4>
                <p>The quantity of Silver Menu will serve approx. 1 person.</p>
                <br>
                <div class="group"> 
               <input type="submit" name="silver"
                class="input" value="sil" />
</div>

            </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
             <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <span>Gold</span>
                <h4>₹ 110</h4>
                <p>Through the cost of tiffin depends upon the city they are located in, number of tiffins, duration of service,number of dishes.
                </p>
            <br> <div class="group"> 
            <input type="submit" name="gold"
                class="input" value="gol" />       
</div>
  
            </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="300">
                <span>Premium</span>
                <h4> ₹ 150</h4>
                <p>Through restaurant food and street food are available , they cannot match the wholesome home-liked food available from tififn services.</p>
            <br>
            <div class="group"> 
            <input type="submit" name="premium"
                class="input" value="pre"/>
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
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Sunday</a>
              </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
              <p class="fst-italic">Our Menu as Below:</p>
                  <p>Papad-1<br>
                  Salad<br>
                Roti<br>
              Rice<br>
            Dal<br>
          Aloo ki sabji<br>
        Buttermilk</p>
                </div>
               </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  
                  <p class="fst-italic">Our Menu as below :</p>
                  <p>Papad<br>
                  Salad<br>
                roti<br>
              Dal<br>
            Rice<br>
          Buttermilk<br>
        Bhindi ki Sabji</p>
                </div>
                            </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <p class="fst-italic">Our Menu as Below :</p>
                  <p>Lunch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dinner:</p>
                  <p>Papad<br>
                    Salad<br>
                  roti<br>
                Dal<br>
              Rice<br>
            Buttermilk
            <br>
          </p>
                </div>
                
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  
                  <p class="fst-italic">our Menu as Below:</p>
                  <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                </div>
                
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                               <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                  <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                </div>
                             </div>
            </div>
            <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                              </div>
              </div>
          </div>
        </div>
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
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">   of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
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
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
</form>
</body>

</html>