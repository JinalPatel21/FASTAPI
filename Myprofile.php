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
  
 body{
	margin:0;
	color: black;
	background:black;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:600px;
	min-height:1150px;
	position:relative;
	
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background-color: black;
}


.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}


.login-html .tab{
	font-size:30px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
    color: #cda45e;
    
}

.login-html .sign-up:checked + .tab{
	color:white;
	border-color:#1161ee;
}
.login-form{
	min-height:500px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}

.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:rgb(255, 255, 255);
	display:block;
    
}
.login-form .group .input,
.login-form .group .button{
	font-size: 14px;
	padding:15px 20px;
	border-radius:0;
	background-color: black;
    border-color: #625b4b;
    box-shadow: none;
    border:1px solid #625b4b;
    color:white;
}

.login-form .group .label{
	color:#cda45e;
	
}

.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.btn{
  background:#cda45e;
  border-radius: 45px;
  padding: 10px 35px;
  transition: 0.4s;
  display:grid;
  text-align: center;
  float: right;
  
}
.re{ color:#DC143C}
.success-msg{
    position: relative;
    padding-top: 11px;
    height: 40px;
    font-size: 34px;
    text-align: center;
   
    color:#90EE90;
    font-family: 'Poppins';
   }
   .error-msg{
    position: relative;
    padding-top: 11px;
    height: 40px;
    font-size: 34px;
    text-align: center;
    background-color: #90EE90;
    color: black;
    font-family: 'Poppins';
   }
   .btn1{
  left: 1200px;
    position: relative;
    color: white;
    top:50px;
   }
</style>
<body>
<div class="btn1"><a href="Dashboard.php">Back</a></li>&nbsp;</div>
<form name="myprofile" method="post">
<?php
include("connect.php");
session_start();
$uid=$_SESSION['id'];

$fetch_data=mysqli_query($a,"SELECT * FROM `ktry` where id=$uid ");

$row=mysqli_fetch_array($fetch_data);

	if(isset($_REQUEST['submit']))
    { 
        $n=$_REQUEST['Name'];
    $no=$_REQUEST['contact'];
    $add1=$_REQUEST['ad'];
    $add2=$_REQUEST['add2'];
    $email=$_REQUEST['Email'];
        extract($_POST);
        $upd=mysqli_query($a,"UPDATE `ktry` set Name='$n', contact='$no', ad='$add1', add2='$add2', Email='$email' where id=$uid");

        if(!$upd)
    {
        ?>
        <div class="error-msg">
        <?php
        echo "The Profile is not Updated";
    }
    else?>
        </div>
    <div class="success-msg">
        The Profile is updated  !!!
    </div>
    <?php
    }
    ?>

<div class="login-wrap">
        <div class="login-html">
  
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">My Profile</label><br><br>
            <div class="login-form">
            <form action="signup1.php" method="post">
            <div class="sign-up-htm">
            <div class="group">
            <label for="Name"  class="label"> Name 
             </label>
             
        <input type="text" class="input" value="<?php
             echo $row[1];
             ?>"
        
        id="n" name="Name">
       
        
    </div>

    <div class="group">
            <label   class="label"> Contact Number   </label>
            
        <input type="text" class="input" id="contact" name="contact" value="<?php
         echo $row[3];
         ?> "
       Required>
       
        
    </div>

    <div class="group">
            <label for="Address" class="label" > Address 1 </label>
          
        <input class="input" id="ad1" name="ad" value="<?php
         echo $row[4];
         ?>  " Required>
        
    </div>

    
    <div class="group">
            <label for="Add" class="label" > Address 2 
        <textarea class="input" id="add2" name="add2"  value="<?php
         echo $row[5];
         ?>  "> </textarea> 
    </div>

     <div class="group"> 
            <label for="Email" class="label" >Email </label>
         
        <input type="email" class="input" id="username"
            name="Email" aria-describedby="emailHelp" value="<?php
         echo $row[6];
         ?>  " Required>    
     </div>
    
<div class="group"> 
    <button type="submit" class="btn" name="submit">
        Update
    </button> 
</div>
</div>
</form>
</body>
</html>