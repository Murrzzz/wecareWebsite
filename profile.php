<?php
  require('assets/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>We Care</title>
    <meta charset="utf-8" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image" href="Image/L.png">
     <!-- Bootstrap Styles-->
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
</head>
<body>

    <?php include "header.php"; ?>
  <br><br><br><br>
    <div class="container py-5" style="background-color: rgba(0,0,0,0.6);" >
      <section class="mb-4 text-center text-white">

        
        <img src="image/user.gif" alt="User" width="240" height="290">
        <h1 class="display-1">"Account Personal Details"</h1>
          <br>
          <p class="h2"> Fullname: <br> <?php echo $_SESSION['fullname']; ?>
          </p>
          <p class="h2"> Email: <br> <?php echo $_SESSION['email']; ?>
          </p>
          <p class="h2"> Date Created: <br> <?php echo $_SESSION['dateCreated']; ?>
          </p>
          <br>
          
      </section>
    </div>
    <br><br><br><br>

    <div class="container py-5" style="background-color: rgba(0,0,0,0.6);" >
      <section class="mb-4 text-center text-white">

        <h1 class="display-4">"When no one's Care, We Care"</h1>
          <br>
          <p class="h4"><em>We can be your companion, we no one's around you.<br>
             We can give you advice and answer for your concern.</em>
          </p>
          <br>
          <button class="btn btn-success text-color-white">Ask a Question?</button>
      </section>
    </div>


    <br><br><br>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
   


   <?php include "footer.php"; ?>

        
</body>
</html>