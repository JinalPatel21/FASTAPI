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
    
    <div class="re">
<?php
 include("connect.php");
session_start();
$passErr=$emailErr="";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name =$_POST['Name'] ;
  $usern= $_POST['us'];
  $contact=$_POST['contact'];
  $add =$_POST['ad'];
  $add2=$_POST['add2'];
  $Email= $_POST['Email']; 
  $password = $_POST['password']; 
  $cpass =$_POST['con'];
  
    $sql = "Select * from ktry where Email='$Email'";
    $result = mysqli_query($a, $sql);
    
      // The button click event validation
      if (isset($_POST['submit'])) 
      {
       if($password == $cpass)
        {
            if(!$Email)
            {
           
            $sql = "INSERT INTO `ktry` ( `Name`,`us`,`contact`,`ad`,`add2`,`Email`, 
         `password`, `con`,`is_admin`) VALUES ('$name','$usern','$contact','$add','$add2','$Email', 
         '$password', '$cpass','False')";
         $result = mysqli_query($a, $sql);
        
         
        echo("done");
         header("location:Login.php");
         
            }

        $emailErr="Email already exists";

        }
        $passErr="Password doesn't match!";
         
    }  
                
     
}   

?>
 
 <div class="login-wrap">
        <div class="login-html">
  
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"> Sign Up Here</label><br><br>
            <div class="login-form">
            <form action="signup1.php" method="post">
            <div class="sign-up-htm">
            <div class="group">
            <label for="Name"  class="label"> Name 
            <span class="error">* </span> </label>
           
        <input type="text" class="input" id="n" name="Name"
         placeholder=" Enter Your Full name" Required >    
    </div>

    <div class="group">
            <label for="us"  class="label"> Username  <span class = "error">* </span> </label>
          
        <input type="text" class="input" id="un" name="us"
        placeholder="Ex: john123" Required >
       
    </div>
    
    <div class="group">
            <label  class="label"> Contact Number <span class = "error">* </span>  </label>
            
        <input type="phone" class="input" id="contact" name="contact" 
        placeholder="Enter your number" Required>
        
    </div>

    <div class="group">
            <label for="Address" class="label" > Address 1  <span class = "error">* </span> </label>
          
        <textarea class="input" id="add1" name="ad" Required > </textarea>
    </div>
<!----------------------------------------------------------------->
    
    <div class="group">
            <label for="Add" class="label" > Address 2 
        <textarea class="input" id="add2" name="add2" > </textarea> 
    </div>

     <div class="group"> 
            <label for="Email" class="label" >Email  <span class = "error">* </span> </label>
           <?php
           echo "$emailErr";
           ?>
        <input type="email" class="input" id="username"
            name="Email" aria-describedby="emailHelp" placeholder="Enter your Email" Required>    

     </div>
    
    <div class="group"> 
            <label for="password" class="label">Password <span class = "error">* </span> </label>
            <?php
             echo($passErr);
            ?>
            <input type="password" class="input"
            id="password" name="password" placeholder="Enter Password" Required> 
    </div>
    
    <div class="group"> 
            <label for="con" class="label">Confirm Password <span class = "error">* </span></label>
           
            <input type="password" class="input"
                id="cpassword" name="con" Required>
            <small id="emailHelp" class="re" >
            Make sure to type the same password as above 
            </small> 
     </div>      
</br>
    <span class = "error">*</span><span class="re">required field </span> 
</br>
<div class="group"> 
    <button type="submit" class="btn" name="submit">
        SignUp
    </button> 
</div>
</div>
</div>
        </form>
</body>
    </html>