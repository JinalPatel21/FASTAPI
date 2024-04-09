<!DOCTYPE html>
<html>
<head>
    
    <!-- Required meta tags --> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
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
    <title="Sign-Up">
</title>
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
	min-height:750px;
	position:relative;
	
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	
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
.error {color: #FF0001;} 
.re{ color:#DC143C}
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
    top: 47px;
    font-size: 35px;
    text-align: center;

    color: #90ee90;
    font-family: 'Poppins';
   }
   .btn1{
  left: 1200px;
    position: relative;
    color: white;
    padding-top: 50px;

}
</style>

<body>
<div class="btn1"><a href="index.php">Back</a></li>&nbsp;</div>
<form  action="" method="POST" >
  <div class="success-msg">
<?php
 include("connect.php");
 if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $n=$_POST['usname'];
  $email=$_POST['email'];
  $sub=$_POST['subject'];
  $msg=$_POST['message'];

  if(isset($_REQUEST['submit']))
 {
    $co ="INSERT INTO `feed_b` (`usname`,`email`,`subject`,`message`) VALUES('$n','$email',
    '$sub','$msg')";
    $p=mysqli_query($a,$co);
 if($p==true)
 {
  

  echo  "Thank You for your feedback !!"  ;
 }

 }
}
?>
</div>
 <div class="split right">
 <div class="login-wrap">
        <div class="login-html">
  
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">FEEDBACK</label><br><br>
            <div class="login-form">
            <div class="sign-up-htm">

            <div class="group">
            <label for="name" class="label"> Name 
            <span class="error">* </span> </label>
           
        <input type="text" class="input"  name="usname" Required >    
    </div>

    <div class="group">
            <label for="email"  class="label"> Email  <span class = "error">* </span> </label>
          
        <input type="email" class="input" id="em" name="email"
         Required >
       
    </div>
    
    <div class="group">
            <label for="subject"  class="label"> Subject <span class = "error">* </span>  </label>
            
        <input type="text" class="input" id="sub" name="subject" 
       Required>
        
    </div>

    <div class="group">
            <label for="Message" class="label" > Message <span class = "error">* </span> </label>
          
        <textarea class="input" id="msg" name="message"  rows="6" Required > </textarea>
    </div>

    <span class = "error">*</span><span class="re">required field </span>
</br> 
</br>
<button type="submit" class="btn" name="submit">
      Send
    </button> 
</div>
</div>

</div>
 </div> 
 </div> 
    
 </div>
</form>
  
</body>
</html>