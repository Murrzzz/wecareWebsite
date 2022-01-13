<?php  

if(isset($_GET['id'])){
   include "dbh.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * 
            FROM request
            WHERE i_id='$id'";
   $result = mysqli_query($conn, $sql);
  ?>
   <?php
   require('session.php');
   require('dbh.php');
   require ('read.php');
   
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>We Care</title>
     <meta charset="utf-8" />
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="shortcut icon" type="image" href="../Image/L.png">
      <!-- Bootstrap Styles-->
      <link href="css/bootstrap.css" rel="stylesheet" />
     <link rel="stylesheet" href="../CSS/style.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
 </head>
 <body>
 
     <?php include "../header_main.php"; ?>
  <br><br><br><br><br><br>
     <div class="panel panel-default/.  l.,, container w-50 p-4">
                         <div class="panel-heading">
                             <h1>Request Details</h1>
                         </div>
                         <div class="panel-body">
                             <div class="row">
                                 <div class="col-lg-12">
                                     <br><br><br>
                                     <?php while ($viewRes = mysqli_fetch_array($result)) { ?>
                                    <h2>ID:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['i_id']?></h3>
                                    <br>
                                    <h2>USERNAME:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['v_username']?></h3>
                                    <br>
                                    <h2>CATEGORY:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['v_category_name']?></h3>
                                    <br>
                                    <h2>CHANNEL:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['v_channel_name']?></h3>
                                    <br>
                                    <h2>TIME:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['time']?></h3>
                                    <br>
                                    <h2>MESSAGE:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['v_message']?></h3>
                                    <br>
                                    <h2>STATUS:</h2>
                                    <h3 class="text-secondary"><?php echo $viewRes['status']?></h3>
                                    <br><br><br><br>
                                    <a href="../request.php" class="btn btn-primary">CLOSE</a>
                             </div>
                             <!-- /.row (nested) -->
                         </div>
                         <!-- /.panel-body -->
 
                         <?php } ?>
                             </div>
                         
 
                     </div>
                     
 
 
     <br><br><br><br><br><br><br><br><br>
         <!-- CSS only -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
         integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
         
    
 
 
    <?php include "../footer.php"; ?>
  
 </body>
 </html>







<?php
}else {
	header("Location: ../read.php");
}
?>