<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Multiple Select Dropdown in PHP</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
   <style>
    body{
     font-family: 'JetBrains Mono', monospace;
     background:#d2d2d2;
    }
    .error{
     color:red;
    }
     select{
        width: 100%;
        min-height:150px;
     }
     .main-box{
      border-radius:5px;
      background:#fff;
      padding:15px;
      border:1px solid #48161D;
      box-shadow:2px 2px 5px #d2d2d2;
     }
     .select-tag{
      background:#48161D;
      color:#fff;
      border-radius:15px;
      display: inline-block;
      font-size:14px;
      padding:3px 15px;
      margin-left:5px;
     }
   </style>
</head>
<body>
   
    <form action="" method="post" class="mb-3">
       
         <h4>Multiple Select Dropdown in PHP</h4>
        
        
             <select name="lang[]" multiple class="form-control">
        <option value="" disabled selected>Choose option</option>
        <option value="Laravel">Laravel</option>
        <option value="Php">Php</option>
        <option value="Jquery">Jquery</option>
        <option value="Node Js">NodeJs</option>
        <option value="Bootstrap">Bootstrap</option>
        <option value="Sql">Sql</option>
             </select>
             <select>
     <option value="Select">Select</option>}  
  <option value="Vineet">Vineet Saini</option>  
  <option value="Sumit">Sumit Sharma</option>  
  <option value="Dorilal">Dorilal Agarwal</option>  
  <option value="Omveer">Omveer Singh</option>  
  <option value="Rohtash">Rohtash Kumar</option>  
  <option value="Maneesh">Maneesh Tewatia</option>  
  <option value="Priyanka">Priyanka Sachan</option>  
  <option value="Neha">Neha Saini</option> 
             </select>
             <input type="submit" name="submit" value="Choose options" class="btn btn-success btn-sm">
        
        
          <?php
             if(isset($_POST['submit'])){
               if(!empty($_POST['lang'])) {
                  foreach($_POST['lang'] as $selected){
                    echo '<p class="select-tag mt-3">'.$selected.'</p>';
                  }          
               }else{
                echo '<p class="error alert alert-danger mt-3">Please select any value</p>';
               }
             }
          ?>
       
    </form>
     </div>
    </div>
   </div>
</body>
</html>