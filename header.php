
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bcontent {
            margin-top: 15px;
        }
    </style>

<div class="container-fluid" style="background-color: white;">
<nav class="navbar navbar-expand-md navbar-light">
     <img src="Image/L.png" width="auto" height="100px" class="d-inline-block align-top">
    <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#toggleM"
    aria-controls="toggleM"
    aria-expanded="false"
    aria-lable="toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="toggleM" style="margin-bottom:10px">
        <ul class="navbar-nav ms-auto text-center">
            <li>
                <a class="nav-link" href="wecare.php"><h3>HOME</h3></a>
            </li>
            <li>
                <a class="nav-link" href="nav_blog.php"><h3>BLOG</h3></a>
            </li>
              <li>
                <a class="nav-link" href="aboutus.php"><h3>ABOUT</h3></a>
            </li>
              <!-- <li>  
                <a class="nav-link" href="#"><h3>CONTACT</h3></a>
            </li> -->
            <li>
                <div class="container bcontent">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                        <h3><?php echo $_SESSION['username']; ?></h3>
                    </button>
                    <div class="dropdown-menu">
                        <div class="dropdown-header"><h4>User details</h4></div>
                        <a class="dropdown-item" href="profile.php"><h3>User Profile</h3></a>
                        <a class="dropdown-item" href="request.php"><h3>Request</h3></a>
                        <a class="dropdown-item" href="assets/session_logout.php"><h3>Logout</h3></a>
                    </div>
                </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
</div>
