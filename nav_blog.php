<?php
  require('assets/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>We Care | Blog</title>
     <!-- Bootstrap Styles-->
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale.0">
    <link rel="shortcut icon" type="image" href="Image/L.png">
    <link rel="stylesheet" href="CSS/style_blog.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

        <?php include "header.php"; ?>

                <div class="content">
                        <div class="topImage">
                        
                        </div>
                    <div class="qoute container-fluid" style="background: rgba(0,0,0,0.6);">
                            <section class="text-center">
                                <h2>When no one's <span>Care</span>, We<span> Care</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                                    Etiam venenatis interdum nulla, non dapibus enim dignissim<br>
                                    semper. Nunc egestas scelerisque mi, quis blandit augue
                                    egestas et. <br>Morbi nec ligula id massa porta laoreet.<br>
                                    Morbi sed massa neque. Maecenas commodo nulla nec neque
                                    vestibulum varius.<br>
                                    
                                    Nulla bibendum tempus diam, vel pulvinar
                                    lectus vulputate sit amet.<br>
                                    Aliquam iaculis risus in enim hendrerit scelerisque.</p>
                                    <button class="btn btn-success text-white my-3">
                                        Follow us on Facebook
                                    </button>
                                    <br>
                            </section>
                    </div>
                    <br><br><br><br><br>
                    <div class="blog">
                        <div class="position-relative col-md-11">
                            <div class="position-absolute top-0 start-50">
                                <div class="badge bg-success text-wrap fs-2" style="width: 8rem;">BLOG</div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <table width="100%">
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="Image/article_1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <h5 class="card-title">4 Reasons Why Counseling Is So Important</h5>
                                                <p class="card-text">Counseling is surrounded by lots of stigmas. It is
                                                common for people to think that those who visit Counselors
                                                are in some way “less than” people that do not require this
                                                type of treatment.Counseling can actually be beneficial
                                                for everyone, not just those who specifically need it to treat issues
                                                such as anxiety, depression,lack of confidence, and more.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col">
                                        <div class="card">
                                            <img src="Image/article_2.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">How Counselors Can Help With Trauma</h5>
                                                <p class="card-text">People who experience a traumatic event often seek help
                                                to find relief as soon as possible. In cases of physical trauma
                                                such as motor disability after a car accident,
                                                it is clear that the solution to this problem will
                                                be found by visiting a doctor in a hospital.
                                                However, when psychological trauma is experienced,
                                                many people have doubts about whether they should
                                                seek help, how to seek it and where to find it.</p>
                                            </div>
                                        </div>
                                </div>
                                <br>
                                <div class="col">
                                    <div class="card">
                                        <img src="Image/article_3.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">3 Benefits Of Mental Performance Consulting For Athletes</h5>
                                            <p class="card-text">Mental performance consulting is more than just helping an
                                                athlete reach their peak potential in their preferred sport;
                                                it’s about breaking through mental barriers and improving
                                                the mental skills necessary to continue achieving true
                                                and lasting greatness in their sports careers.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col">
                                    <div class="card">
                                        <img src="Image/article_4.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">5 Signs You Should Seek Counselling</h5>
                                            <p class="card-text">Life is full of ups and downs, twists and turns.
                                                You are bound to face stress, sadness, grief and conflict
                                                just as much as you are to face happiness, joy, elation,
                                                and serenity. When the times begin to feel a bit heavier though,
                                                life can start becoming a bit confusing to navigate.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
                <br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
                <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
                
   <?php include "footer.php" ?>
</body>
</html>