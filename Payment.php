<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HR's Kitchen</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    body{
        background-color: black;
        color:white;

    }
    
        *{
            
        font-size: large;
        }
.payment-form {
  max-width: 600px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

.payment-form label {
  display: block;
  margin-bottom: 5px;
}
.required{
    font-size: medium;
    font-weight: bold;
}
.payment-form input[type="text"],
.payment-form input[type="number"],
.payment-form select,
.payment-form textarea {
  width: 100%;
  padding: 10px;
  border-radius: 20px;
  border: 2px solid #ccc;
  margin-bottom: 10px;
  background: transparent;
  font-size: medium;
  color:orange;
}

.payment-form .checkbox-label {
  display: block;
  margin-top: 10px;
}

.payment-form button[type="submit"] {
  background-color: orange;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: large;
  text-align: center;
}                                                                           
.font1{
color:orange;
}

.payment-form select{
    color:orange;
}
.pay{
  float:right;
  color: white;
	font-size: 30px;
	-webkit-text-stroke: 2px green;
}
.span1 {
 
  position: relative;
    top: -70px;
    font-size: 35px;
    text-align: center;
    
    color: white;
    font-family: 'Poppins';
    left: 450px;
    width: 350px;
}


body {
  padding: 20px;
}

.circle {
  position: relative;
  background: #8cc63e;
  border-radius: 50%;
  width: 100px;
  height: 100px;
  left:380px;
}

.checkmark {
  position: absolute;
    transform: rotate(45deg) translate(-50%, -50%);
    left: 25%;
    top: 45%;
    height: 49px;
    width: 30px;
    border-bottom: 3px solid;
    border-right: 3px solid;
}
.btn1{
  left: 1200px;
    position: relative;

}


 </style>
</head>
<body>

        <div class="btn1"><a href="bill.php">Back</a></li>&nbsp;</div>
          
</div>
<?php
if(isset($_REQUEST['submit']))
{
  ?>
<div class="circle">
  <div class="checkmark"></div>
</div>
<div class="span1">ORDER PLACED!</div> 

<?php
}
?>

    <div class="font1"> <h1> <center> <b>Payment </b> </center> </h1></div>
    <form class="payment-form"  method="post">       
      
  <label for="payment-type" class="required">Payment Type:</label>
  <select id="payment-type" name="payment-type" required>
    <option value="">Select Payment Type</option>
    <option value="cod">Cash On delivery</option>
    <option value="UPI">UPI</option>
  </select><br>


  <br>

<div class="pay">

 <?php
 include("connect.php");
 session_start();
 $re= $_SESSION['amt'];
 echo "Grand Total  :  ".$re;
$uid=$_SESSION['id'];
 if (isset($_POST['submit'])) 
      {
        $order_detail= date("d/m/y");
        $method=$_REQUEST["payment-type"];
        $sql = "INSERT INTO `payment_detail` ( `uid`,`amount`,`order_dt`,`method`) VALUES ('$uid','$re','$order_detail',
        '$method')";
         $result = mysqli_query($a, $sql);
         
        
            }

 ?>

</div>
<br><br>
  <label class="checkbox-label">
    <input type="checkbox"    name="     " required>
    I agree to the <a href="#">   and conditions</a>.
  </label>
<br><br>
 <center> <button type="submit" name="submit">Submit Payment</button></center>
 
</form>

</body>
</html>