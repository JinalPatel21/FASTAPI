<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    table, tr, td {
     border: 1px solid transparent;
      
    }
   center, h4 {
        color: #F4A460;
   }
   .menu-color tr h4{
color:orange;
padding:10px;
gap:10px;
margin: auto;
width: 100px;
   }
   form table{
    width: 950px;
   }
   form .menu-border{
    border-color: black;
   }
.menu-border {
width:500px;
    text-align: center;
}
   .error{
    position: relative;
   top:-180px;
    font-size: 35px;
    text-align: center;
    background: transparent;
    color: #90EE90;
    font-family: 'Poppins';
   }
     td button{
      border-radius: 20px;
      background-color: #cda45e;
      color:black;
      font-size: large;
     padding: 20px;
     }
  </style>
</head>

<body>
  <?php
  include "connect.php";
  ?>

 <!-- ======= Specials Section ======= -->
 
 <section id="specials" class="specials">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
    <nav id="navbar" class="navbar order-last order-lg-0">
      <h2>Admin Dashboard</h2><p>HR's Kitchen</p>
     
       <ul>
          <li><a class="nav-link scrollto active" href="index.php">Logout</a></li>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
        <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">CUSTOMER DETAILS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-bs-toggle="tab" href="#tab-2">GOLD</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">SILVER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">PREMIUM</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">MENU</a>
          </li>
          
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
              <form id="form1" name="form1" method="post" action="">
    <table width="817"  >
      
       <center><h4>CUSTOMER DETAILS  </h4></center> 
      
      <tr>
       <td><h5>ID<h5></td>
        <td><h5>NAME<h5></td>
        <td><h5>MOBILE NUMBER <h5></td>
        <td><h5>ADDRESS 1<h5> </td>
        <td><h5>ADDRESS 2<h5></td> 
      </tr>
   
    <?php
    $que=mysqli_query($a,"SELECT * FROM `ktry`  where is_admin='False' order by id ");
	
	 while($row=mysqli_fetch_array($que))
	 {
	    echo"<tr>
				<td> $row[0]</td>
				<td> $row[1]</td>
				<td> $row[3]</td>
				<td> $row[4]</td>
				<td> $row[5]</td>
			</tr>";
		}
	?>
   </table>
  </form>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
    <form id="form2" name="form2" method="post" action="">
  
        <center><h4>GOLD TIFFINS </h4></center> 
     
    <table width="817" >
     
      <tr>
        <td><h5>User_Id</h5></td>
        <td><h5>Orders </h5></td>
        <td><h5>Quantity</h5></td>
       
   
    <?php
    $que=mysqli_query($a,"SELECT * FROM `tiffin_detail` where tiffin ='Gold' ");
    
	 while($row=mysqli_fetch_array($que))
	 {
	    echo"<tr>
				<td> $row[1]</td>
				<td> $row[2]</td>
				<td> $row[3] </td>
			</tr>";
		}
	?>
   </table>
  </form>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
              <form id="form2" name="form2" method="post" action="">
              <center><h4>SILVER TIFFINS </h4></center> 
    <table width="817" >
      
      
        <td><h5>User_ID</h5></td>
        <td><h5>Orders</h5></td>
        <td><h5>Quantity</h5></td>
   
    <?php
    $que=mysqli_query($a,"SELECT * FROM `tiffin_detail` where tiffin ='Silver' ");
    
	 while($row=mysqli_fetch_array($que))
	 {
	    echo"<tr>
				<td> $row[1]</td>
				<td> $row[2]</td>
				<td> $row[3] </td>
			</tr>";
		}
	?>
   </table>
  </form>  
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
              <form id="form3" name="form2=3" method="post" action="">
              <center><h4>PREMIUM TIFFINS </h4></center> 
    <table width="817" >
    
      <tr>
        <td><h5>User_Id</h5></td>
        <td><h5>Orders</h5></td>
        <td><h5>Quantity</h5></td>
   
    <?php
    $que=mysqli_query($a,"SELECT * FROM `tiffin_detail` where tiffin ='Premium' ");
    
	 while($row=mysqli_fetch_array($que))
	 {
	    echo"<tr>
				<td> $row[1]</td>
				<td> $row[2]</td>
				<td> $row[3]</td>
			</tr>";
		}
	?>
   </table>
  </form>  
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <form method="post">
                <table class="menu-border">
                 <div class="menu-table">
                <tr>
                <div class="menu-color">
                <td><h4>Days</h4></td>&nbsp;
                <td><h4>Dal</h4></td>&nbsp;
                <td><h4>Rice</h4></td>&nbsp;
                <td><h4>Roti</h4></td>&nbsp;
                <td><h4>Sabji</h4></td>&nbsp;
                <td><h4>Papad</h4></td>&nbsp;
                <td><h4>Update</h4></td>&nbsp;
                </div>
                </tr>
                <tr>

                <td>Monday</td>
    <td><input type="checkbox" name="m1[]" value="Dal"></td>
    <td><input type="checkbox" name="m1[]" value="Rice"></td>
    <td><input type="checkbox" name="m1[]" value="Roti"></td>
    <td><input type="checkbox" name="m1[]" value="Sabji"></td>
    <td><input type="checkbox" name="m1[]" value="Papad"></td>
    
             <td><button name="submit">Add</button></td>
                </tr>
                <div class="error">
  
    <?php
    if(isset($_POST['submit']))
    {
      $brand = $_POST['m1'];
    if(!empty([$brand]))
    {
        $lang =implode(',', $brand);
        // Insert and Update record
        $checkEntries = mysqli_query($a, "SELECT * from `admin_menu`");
        if(mysqli_num_rows($checkEntries) == 0)
        {
            mysqli_query($a, "INSERT INTO  `admin_menu` (`menu`) VALUES('$lang') where id=1");
            echo "success";
        }
        else
        {
           $f= mysqli_query($a, "UPDATE `admin_menu` SET `menu` ='$lang' where id=1");
           echo" success";
        }
      }
      }
?>
      </div>
                
      <tr>
    <td>Tuesday</td>
    <td><input type="checkbox" name="t1[]" value="Dal"></td>
    <td><input type="checkbox" name="t1[]" value="Rice"></td>
    <td><input type="checkbox" name="t1[]" value="Roti"></td>
    <td><input type="checkbox" name="t1[]" value="Sabji"></td>
    <td><input type="checkbox" name="t1[]" value="Papad"></td>
    
    <td><button type="submit" name="submit1">Add</button></td>
                </tr>
                <div class="error">
  
    <?php
    if(isset($_POST['submit1']))
    {
      $brand1 = $_POST['t1'];
    if(!empty([$brand1]))
    {
        $lang1=implode(',', $brand1);
        // Insert and Update record
        $checkEntries1 = mysqli_query($a, "SELECT * from `admin_menu`");
        if(mysqli_num_rows($checkEntries1) == 0)
        {
            mysqli_query($a, "INSERT INTO  `admin_menu` (`menu`) VALUES('$lang1')where id=2");
            echo "success";
        }
        else
        {
           $upd= mysqli_query($a, "UPDATE `admin_menu` SET `menu` ='$lang1' where id=2");
           echo"success";
        }
      }
      }
?>
  </div>
    </tr>
    <tr>
                <td>Wednesday&nbsp;</td>
    <td><input type="checkbox" name="w1[]" value="Dal"></td>
    <td><input type="checkbox" name="w1[]" value="Rice"></td>
    <td><input type="checkbox" name="w1[]" value="Roti"></td>
    <td><input type="checkbox" name="w1[]" value="Sabji"></td>
    <td><input type="checkbox" name="w1[]" value="Papad"></td>
   
    <td><button  type="submit" name="submit2">Add</button></td>
                </tr>
                <div class="error">
  
    <?php
    if(isset($_POST['submit2']))
    {
      $brand = $_POST['w1'];
    if(!empty([$brand]))
    {
        $lang =implode(',', $brand);
        // Insert and Update record
        $checkEntries = mysqli_query($a, "SELECT * from `admin_menu`");
        if(mysqli_num_rows($checkEntries) == 0)
        {
            mysqli_query($a, "INSERT INTO  `admin_menu` (`menu`) VALUES('$lang') where id=3");
            echo "success";
        }
        else
        {
           $f= mysqli_query($a, "UPDATE `admin_menu` SET `menu` ='$lang' where id=3");
           echo"success";
        }
      }
      }
?>
                </div>
                </tr>
                <tr>
                <td>Thursday</td>
    <td><input type="checkbox" name="th1[]" value="Dal"></td>
    <td><input type="checkbox" name="th1[]" value="Rice"></td>
    <td><input type="checkbox" name="th1[]" value="Roti"></td>
    <td><input type="checkbox" name="th1[]" value="Sabji"></td>
    <td><input type="checkbox" name="th1[]" value="Papad"></td>
    
    <td><button  type="submit" name="submit3">Add</button></td>
                </tr>
                
  
    <?php
    if(isset($_POST['submit3']))
    {
      $brand = $_POST['th1'];
    if(!empty([$brand]))
    {
        $lang =implode(',', $brand);
        // Insert and Update record
        $checkEntries = mysqli_query($a, "SELECT * from `admin_menu`");
        if(mysqli_num_rows($checkEntries) == 0)
        {
            mysqli_query($a, "INSERT INTO  `admin_menu` (`menu`) VALUES('$lang') where id=4");
            echo "success";
        }
        else
        {
           $f= mysqli_query($a, "UPDATE `admin_menu` SET `menu` ='$lang' where id=4");
           echo"success";
        }
      }
      }
?>
               
                </tr>
                <tr>
                <td>Friday</td>
    <td><input type="checkbox" name="f1[]" value="Dal"></td>
    <td><input type="checkbox" name="f1[]" value="Rice"></td>
    <td><input type="checkbox" name="f1[]" value="Roti"></td>
    <td><input type="checkbox" name="f1[]" value="Sabji"></td>
    <td><input type="checkbox" name="f1[]" value="Papad"></td>
    
    <td><button  type="submit" name="submit4">Add</button></td>
                </tr>
                <div class="error">
  
    <?php
    if(isset($_POST['submit4']))
    {
      $brand = $_POST['f1'];
    if(!empty([$brand]))
    {
        $lang =implode(',', $brand);
        // Insert and Update record
        $checkEntries = mysqli_query($a, "SELECT * from `admin_menu`");
        if(mysqli_num_rows($checkEntries) == 0)
        {
            mysqli_query($a, "INSERT INTO  `admin_menu` (`menu`) VALUES('$lang') where id=5");
            echo "success";
        }
        else
        {
           $f= mysqli_query($a, "UPDATE `admin_menu` SET `menu` ='$lang' where id=5");
           echo" success";
        }
      }
      }
?>
                </div>
                </tr>

                <tr>
                <td>Saturday</td>
                
    <td><input type="checkbox" name="s1[]" value="Dal"></td>
    <td><input type="checkbox" name="s1[]" value="Rice"></td>
    <td><input type="checkbox" name="s1[]" value="Roti"></td>
    <td><input type="checkbox" name="s1[]" value="Sabji"></td>
    <td><input type="checkbox" name="s1[]" value="Papad"></td>
   
    <td><button  type="submit" name="submit5">Add</button></td>
                </tr>
                <div class="error">
  
    <?php
    if(isset($_POST['submit5']))
    {
      $brand = $_POST['s1'];
    if(!empty([$brand]))
    {
        $lang =implode(',', $brand);
        // Insert and Update record
        $checkEntries = mysqli_query($a, "SELECT * from `admin_menu`");
        if(mysqli_num_rows($checkEntries) == 0)
        {
            mysqli_query($a, "INSERT INTO  `admin_menu` (`menu`) VALUES('$lang') where id=6");
            echo "success";
        }
        else
        {
           $f= mysqli_query($a, "UPDATE `admin_menu` SET `menu` ='$lang'  where id=6");
           echo"success";
        }
      }
      }
?>
                </div>
                </tr>
               
                </div>
                </table>
                </form>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-6">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
</section><!-- End Specials Section -->

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