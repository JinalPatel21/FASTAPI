<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
        <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
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
    <title>Reset Password</title>
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
	min-height:630px;
	position:relative;
	
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:black;
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
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	color:#cda45e;
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
	color:#cda45e;
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
.re{ color:#DC143C}
.error{ color: #dc143c}
.btn{
  background:#cda45e;
  border-radius: 45px;
  padding: 10px 35px;
  transition: 0.4s;
  display:grid;
  text-align: center;
  float: right;
  
}
.success-msg{
	position: relative;
    top: -150px;
    font-size: 45px;
    text-align: center;
  
    color: #90EE90;
    font-family: 'Poppins';
   }
</style>
<body>
<header id="header" class="fixed-top d-flex align-items-cente">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.php">HR's Kitchen</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/jd1.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Back</a></li>&nbsp;
</ul>
</div>
    </header>
<form  action="" method="POST">
<?php
session_start();
include("connect.php");
?>

<div class="login-wrap">
        <div class="login-html">
  
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Reset Password
                 </label>
</br>
</br>
</br>
<div class="success-msg">
<?php
if(isset($_REQUEST['submit']))
{
	
	$E=($_REQUEST['Email']);
	$repass=($_REQUEST['con']);
	$p=($_REQUEST['password']);

	$sql=mysqli_query($a,"UPDATE `ktry` SET  password='$p' , con='$repass'   Where Email='$E'");

	if(!$sql)
	{
		
		echo "Not Updated!!!!";
		
	}
	
	else
		echo " Updated!!";
}

?>
</div>
            <div class="login-form">
    <div class="group">
            <label for="User"> Email</label >  
            <span class="error">* </span> 
            
            <input type="text" class="input" id="us" name="Email"
         placeholder=" Enter Your Email" Required> 
    </div>
	
	<div class="group">
            <label for="pass" >New Password</label >  
            <span class="error">* </span> 
            <input type="password" class="input" id="pass" name="password" Required>
</div>

<div class="group">
            <label for="pass"  >Confirm New Password</label>  
            <span class="error">* </span> 
            <input type="password" class="input" id="pass1" name="con" Required>
</div>
<div class=" group"> 
    <button type="submit" class="btn" name="submit">
       Submit
    </button> 
</div>
</div>
</div>
</div>
</form>
</body>

</html>