<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body{
	margin:0;
	color: #cda45e;
	background:#2f2e2e;
	font:600 16px/18px 'Open Sans',sans-serif;
}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:600px;
	min-height:1200px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
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
	border-bottom:2px solid transparent;
}

.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
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
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	
	-webkit-text-security:circle;
}

.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
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


 </style>

<?php
 include("connect.php");

$passErr=$emailErr="";
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name =$_POST['Name'] ;
  $usern= $_POST['us'];
  $contact=$_POST['no'];
  $add =$_POST['ad'];
  $add2=$_POST['add2'];
  $Email= $_POST['Email']; 
  $password = $_POST['password']; 
  $cpass =$_POST['con'];
  
    $sql = "Select * from ktry where Email='$Email'";
    $result = mysqli_query($a, $sql);
    //$re = mysqli_num_rows($result); 
  
  
  //if($re == 0)
  // {
    
      // The button click event validation
      if (isset($_POST['submit'])) 
      {
        
       if($password == $cpass)
        {
            if($sql!=$Email)
            {
                ?>
                <span class = "error">clicked </span>
           <?php
            $sql = "INSERT INTO `ktry` ( `Name`,`us`,`no`,`ad`,`add2`,`Email`, 
         `password`, `con`) VALUES ('$name','$usern','$contact','$add','$add2','$Email', 
         '$password', '$cpass')";
         $result = mysqli_query($a, $sql);
         ?>
         
         <span class = "error">It's Done* </span>
        
         <?php
         header("location: Dashboard.php");
            }
        $emailErr="Email already exists";
        }
        $passErr="Password doesn't match!";
         
    }      
}   

?>
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
        <form action="signup1.php" method="post">
            
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">
                Sign Up Here</label>
            <div class="login-form">
            
                    <div class="group">
                      <label for="Name" class="label">Name<span class="error">* </span> </label>
                      <input id="name" type="text" class="input" name="Name" placeholder=" Enter Your Full name" Required >
                      </div>

                      <div class="group">
                          <label for="us" class="label">Username<span class = "error">* </span></label>
                          <input id="user" type="text" class="input" name="us"
        placeholder="Ex: john123" Required>
        <small id="ushelp" >
            Only use alphabets and numbers.No space is allowed.
            </small> 
                      </div>

                      <div class="group">
                          <label for="Contact" class="label">Contact number<span class = "error">* </span> </label>
                          <input id="contact" type="phone" class="input"  name="no" 
        placeholder="Enter your number" Required>
                      </div>

                        <div class="group">
                          <label for="Address" class="label">Address <span class = "error">* </span> </label>
                         <textarea class="input" id="address1" cols="30" rows="10" name="ad"></textarea> 
                      </div>

                      <div class="group">
                     <label for="Add"> Address 2 </label>
                    <textarea class="input" id="add2" name="add2"> </textarea>
                    </div>

                    <div class="group">
                          <label for="Email" class="label">Email Address <span class = "error">* </span> </label>
                          <?php
                             echo ($emailErr);
                            ?>
                          <input type="email" class="input" id="username"
                            name="Email" aria-describedby="emailHelp" placeholder="Enter your Email" Required>   
                      </div>
                      
                      <div class="group">
                          <label for="password" class="label">Password <span class = "error">* </span></label>
                          <?php
                        echo($passErr);
                            ?>
                          <input id="pass" type="password" class="input"  name="password" 
                          placeholder="Enter Password" Required>
                      </div>
                      <div class="group">
                          <label for="con" class="label">Repeat Password <span class = "error">* </span></label>
                          <input id="pass" type="password" class="input" data-type="password" id="cpassword"
                           name="con" Required>
                           <small id="emailHelp" >
                        Make sure to type the same password as above. 
                         </small> 
                      </div>
                     
                      <div class="group">
                          <button type="submit" class="button" >
                            Sign Up </button>
                      </div>
                      <div class="hr"></div>
                      <div class="foot-lnk">
                          <label for="tab-1">Already Member?</a>

                      </div>
</div>
          </div>
      </div>
      </form>
</body>
</html>