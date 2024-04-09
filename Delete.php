
  
<?php

include("connect.php");
$id=$_REQUEST['id'];
     
       $del=mysqli_query($a,"DELETE  FROM `tiffin_detail` WHERE `tiffin_detail`.`id` = $id");
       if(!$del)
       {
       echo("Error data not deleted ");
       }
       else
       {
        header("location: bill.php");
      }
    
	?>
  </body>
</html>