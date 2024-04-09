 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JD's Kitchen</title>
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

  <style>
      *{
    padding: 0;
margin: o;
box-sizing: border-box;
font-family: "Poppins";}


.wrapper {
border: 1px solid white;
position: absolute;
width: 80vw;
transform: translate(-50%, -50%);
top: 210%;
left: 50%;
display: flex;
justify-content: space-around;
gap:10px;

}

.container2{
width: 28vmin;
height:100px;
display: flex;
flex-direction: column;
padding: 1em o;
position: relative;
font-size: 16px;
border-radius: 0.5em;

}

span.num {
color:#ffffff;
display: grid;
place-items: center;
font-weight: 600;
font-size: 3em;
}
span.text{
color: #e0e0e0;
font-size: 1em;
text-align: center;
pad: 0.7em 0;
font-weight: 400;
line-height: 0;

}
@media screen and(max-width :  1024px)
{
.wrapper{width:85vw;}
.container2{
height:26vmin;
width:26vmin;
font-size:12px;

}
}
    </style>
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/jd1.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto me-lg-0"><a href="index.php">HR's Kitchen</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       
<?php
include ("connect.php");
?>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="signup.php">
            Sign Up</a></li>
          <li><a class="nav-link scrollto" href="Login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          
          
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
          <li><a class="nav-link scrollto" href="feedback.php">Feedback</a></li>
         
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>JD's Kitchen</span></h1>
          <h2>HOMEMADE FOOD!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/dish4.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Fresh Homemade Food for PG students, Employees who can't cook food at home.</h3>
            <p class="fst-italic">
              Well,many of you might like restaurant food,but would you like 
              to make a habit of eating homemade food? 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Eat Healthy,Stay Healthy.</li>
              <li><i class="bi bi-check-circle"></i> Eat Better Food,Not Less.</li>
              <li><i class="bi bi-check-circle"></i>The first Wealth is Health.</li>
            </ul>
            <p>
              Who doesn't love 'Ma Ke Hath Ka Khana'!! We can't cook the food as your mother cooks but i am pretty sure you 
              will really love to eat some 'Ghar Ka Khana'. We are here to serve you homemade food. Stay Safe, Stay Healthy.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= counter Section ======= -->



    <section>

      <div class="wrapper">
        <div class="container2">
         
         <span class="num" data-val="300">000+</span>
         <span class="text">Tiffins Delivered</span>
       </div>
       <div class="container2">
         
        <span class="num" data-val="150">000+</span>
        <span class="text">Regular Customer </span>
      </div>
      <div class="container2">
         
        <span class="num" data-val="20">000+</span>
        <span class="text">Workers</span>
      </div>
   
      </div>
      </section>

      <script>
  let valueDisplays= document.querySelectorAll(".num");
let interval=5000;

valueDisplays.forEach((valueDisplay)=>{
let startValue=0;
let endValue=parseInt(valueDisplay.getAttribute("data-val"));

let duration=Math.floor(interval / endValue);
let counter= setInterval(function () {
startValue +=1;
valueDisplay. textContent= startValue;
if(startValue == endValue){
clearInterval(counter);
}
}, duration);

});
</script>

      
    <!-- End counter  Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Tiffin-Services</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Hygenic Food</h4>
              <p>We provide you the Hygenic food which is homemade and healthy.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Order from wherever you are Comfortable</h4>
              <p>You can order the food from wherever you are!As we provide the facility to deliver the food to your office as well as home.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Cash on Delivery</h4>
              <p>No worry about the payment doing online! You will have to pay cash on delivery. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Silver</li>
              <li data-filter=".filter-salads">Gold</li>
              <li data-filter=".filter-specialty">Premium</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/silver.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Silver</a><span>₹90</span>
            </div>
            <div class="menu-ingredients">
              4 Roti,1 Sabji,Rice,Dal,Salad,Papad,Buttermilk
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/gold.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Gold</a><span>₹110</span>
            </div>
            <div class="menu-ingredients">
              6 Roti,2 Sabji,Salad,Rice,Dal,2 Papad,Buttermilk
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/premium.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Premium</a><span>₹150</span>
            </div>
            <div class="menu-ingredients">
            8 Roti,2 Shak,Rice,Dal,Salad,Papad,Buttermilk
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Weekend Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Week 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Week 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Week 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Week 4</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Gulab Jamun</h3>
                    <p>Our special Indian sweet which everyone loves is Gulab Jamun.Authentic Gulab Jamun is always made with khoya or mawa (evaporated milk solids). Khoya is made by continuously simmering the milk on a low heat until most of the moisture evaporates.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Gulab-jamun.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Suji Ka Halwa</h3>
                    <p>Suji ka Halwa is an Indian traditional sweet dish. It is also known by various names like Suji Halwa in North India, Rava Kesari in South India, Rava Sheera in Western India, and Semolina Pudding in Europe & the USA.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/shiro.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Gajjar Ka Halwa</h3>
                    <p>Gajjar ka Halwa is the best.Carrot halwa is a popular sweet made in North India, and it is especially popular during winters. The traditional gajar ka halwa recipe is made with only carrots, whole (full-fat) milk, ghee and sugar; there's no need for khoya (evaporated milk solids) or condensed milk.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
      
                  <img src="assets/img/carrot-halwa.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kheer</h3>
                    <p>The make of the Indian sweet dish (dessert) Kheer usually consists of cereals, lentils or their flours. Sometimes even fruits and veggies.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/kheer.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Order Tasty Food When You Organize Your Events </p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>As per dishes</span></p>
                  </div>
                  <p class="fst-italic">
                   We also provide the facility to prepare dishes as per order for birthday Parties. 
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>Provide you tasty as well as best quality food at your place.</li>
                    <li><i class="bi bi-check-circled"></i>The childern's special as well as adult special loving food.</li>

                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>As per dishes</span></p>
                  </div>
                  <p class="fst-italic">
                    We provide the food delivery as per your custom parties.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>We will provide you different options as per your requirement.</li>
                    <li><i class="bi bi-check-circled"></i> Custom parties are great but the food will also be fabulous .</li>
                  </ul>
                  
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The Food is just amazing and healthy as well.They provide good quality food and on time delivery.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/drashti1.jpg" class="testimonial-img" alt="">
                <h3>Drashti Harsora</h3>
                <h4> PG Student </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I go to my office daily in morning 9 a.m,so i really don't have enough time to cook my lunch.This service is best.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/khyati1.jpg" class="testimonial-img" alt="">
                <h3>Khyati Sedani</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I never felt like i am not eating homemade food. It's like "Maa ke hath ka khana".
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/manasvi.jpg" class="testimonial-img" alt="">
                <h3>Manasvi Sodha</h3>
                <h4>Manager</h4>
              </div>
            </div><!-- End testimonial item -->

            <!-- End testimonial item -->

    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Kitchen</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/gallery1/image1.jpg" alt="" class="img-fluid">
              
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/gallery1/image2 (1).jpg" alt="" class="img-fluid">
              
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/gallery1/image7 (1).jpg" alt="" class="img-fluid">
              
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/gallery1/image8.jpeg" alt="" class="img-fluid">
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/jinal.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jinal Lathiya</h4>
                  <span> Chef</span>
                </div>
              
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/diya.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Diya Rathod</h4>
                  <span>Chef</span>
                </div>
                
              </div>
            </div>
          </div>

          

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30688417.89504741!2d64.41490197220116!3d20.12800735684144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1672985432233!5m2!1sen!2sin" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p> Block no.6,kalvibid,Bhavnagar,Gujarat,India</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>hrkitchen23@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9068756475</p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
                <strong>Phone:</strong> +91 9068756475<br>
                <strong>Email:</strong> jdkitchen23@gmail.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#why-us">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Services</a></li>
            
              <li><i class="bx bx-chevron-right"></i> <a href="Privacy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="#menu"> Regular Menu</a> </li>
              <li><i class="bx bx-chevron-right"></i><a href="#events"> Event Based Food Delivery</a> </li>
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