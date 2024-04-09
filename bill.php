<!DOCTYPE html>
<html lang="en">

<head>
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
   
        <style>
  #my-orders {
  padding: 180px;
  color:white;
   

}
#my-orders h2{
  text-align: center;
}

#orders-table {
  width: 100%;
  border-collapse: collapse;
  color: white;
}

#orders-table th,
#orders-table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  color:  white;
}

#orders-table th {
  background-color: #FFA500;
  font-weight: bold;
  color: white;
}
table , tr, th{
  border: 1px solid ;
  margin-left: auto;
  margin-right: auto;
  width: 1100px;

}
.table1 .thead-dark tr th {
  background-color: #FFA500;
  padding: 10px ;
 
}
.table1 .thead-dark  th td{
  padding: 20px;
}
.btn-payout a {
  background:#FFA500;
  border-radius: 45px;
  padding: 10px 35px;
  transition: 0.4s;
  text-align: center;
  color: black;
  
}
#table2 tr td{
  background-color: green;
  color: black;
  font-family: serif;
  padding-right: 300px;

}
.font1 {
font-family: Arial, Helvetica, sans-serif;
font-size: larger;
}
.dlt-msg {
    position: relative;
    top: 140px;
    font-size: 35px;
    text-align: center;
    background-color: #90EE90;
    color: black;
    font-family: 'Poppins';
  }
   
        </style>
        </head>
        <body>
          
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/jd1.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto me-lg-0"><a href="index.php">HR's Kitchen</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a href="Dashboard.php">Back</a></li>&nbsp;
          <li><a  href="index.php" name="Logout">Logout</a></li>&nbsp;
</div>
 </header>

            
<form name="frm1" method="post">
<div id="my-orders">
  <h2>My Orders</h2>
  <table id="orders-table">
    <thead>
      <tr>
        <th>User_ID</th>
        <th>Order</th>
        <th>Quantity</th>
        <th> Edit</th>
      </tr>
    </thead>
    
    <?php
    session_start();
    include("connect.php");
    $uid=$_SESSION['id'];
    
    extract($_POST);
    $fetch_dta=mysqli_query($a,"SELECT * FROM `tiffin_detail` where uid=$uid ");
	
	 while($row=mysqli_fetch_array($fetch_dta))
	 {
	    echo"<tr>
        <td> $row[1]</td>
				<td> $row[2]</td>
				<td> $row[3]</td>
       
        <td> <a href='Delete.php?id=$row[0]'> Delete </a> </td>

       </tr>";
        
		}?>
    
  </div>
  </table>
  </div>
  <h2 ><center> Invoice </center></h2>
    <table class="table1">
  <thead class="thead-dark">
    <tr>
      <th> Items</th>
      <th> Quantity</th>
      <th>Total</th>
      
    </tr>
   
  </thead>
  <body>
  <?php
   extract($_POST);
    $Submit_dta=mysqli_query($a,"SELECT * FROM `tiffin_detail` where uid=$uid ");
 
	 while($r1=mysqli_fetch_array($Submit_dta))
	 {
	    echo"<tr>
				<td> $r1[2]</td>
				<td> $r1[3]</td>
				<td> ";
       if($r1[2]=='Silver') 
       {
        
        echo $r1[4];
       }  
        elseif($r1[2]=='Gold')
        {
          
          echo $r1[4];
        }
        elseif($r1[2]=='Premium')
        {
         
           echo $r1[4];
        }
       
        "</td>
        </tr>
        "; 
        
        
   }
   
   ?> 
    </div>
  </table>
  <table id="table2">
    <tr>
      <td><h5><b>Grand Total</b></h5></td>
      <td></td>
      <td>
      <?php
   extract($_POST);
  $sql1=mysqli_query($a,"SELECT SUM(tot) from `tiffin_detail` where uid=$uid");
    while($row1=mysqli_fetch_array($sql1))
    {
      
       ?>
       <div class="font1">
      <b> <h5> 
      <?php echo $row1['SUM(tot)'] ;
      $total=$row1['SUM(tot)'];
      $_SESSION['amt']=$total;
      $id = $_SESSION['id'];
     
      ?>
      </h5></b>
    </div>
    
<?php
    }
    
   ?>
      </td>
    </tr>
  </table>
  <br>
  <br>
   
  <div style=" text-align: center;">
  <div class="btn-payout">  <a href="Payment.php">
   
  Payment </a> 
  <?php
    
    //extract($_POST);
    //$_SESSION[$total]=$t;
    
    ?></div>
</div>
</form>
</body>

</html>