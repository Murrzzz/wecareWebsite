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

        <h1 class="display-4">"When no one's Care, We Care"</h1>
          <br>
          <p class="h4"><em>We can be your companion, we no one's around you.<br>
             We can give you advice and answer for your concern.</em>
          </p>
          <br>
          <button class="btn btn-success text-color-white">Ask a Question?</button>
      </section>
    </div>
    <br><br><br><br>
    <div class="container">
      <div class="row">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-6">
              <div class="card h-100">
                <img src="Image/article_1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">4 Reasons Why Counseling Is So Important</h5>
                  <p class="card-text">Counseling is surrounded by lots of stigmas. It is
                                      common for people to think...</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small><br>
                  <a href="nav_blog.php" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card h-100">
                <img src="Image/article_2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">How Counselors Can Help with Trauma</h5>
                    <p class="card-text">People who experience a traumatic event often seek help
                                        to find relief as soon as possible.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small><br>
                    <a href="nav_blog.php" class="btn btn-primary">Read More</a>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <iframe width="530" height="315" src="https://www.youtube.com/embed/DCHbhDxBLko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
              <iframe width="530" height="315" src="https://www.youtube.com/embed/8KjWbjhb89o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
    </div>
    <br><br><br>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
   


   <?php include "footer.php"; ?>

        
</body>
</html>