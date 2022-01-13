<?php
   session_start();
if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) // it is use for invalid status and default status
{
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['username']);
    //echo "<script>window.location.href = '/Counseling_Website/Counseling_Website/admin_wecare/login.php'</script>";
}

if ($_SESSION['status'] == 'valid') {
    echo "<script>window.location.href = '/sample1/wecare.php'</script>";
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>We Care | Login</title>
    <link rel="shortcut icon" type="image" href="Image/L.png">
    <link rel="stylesheet" href="CSS/style_login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
        <?php include "header_login.php"; ?>

    <section>
        
        <div class="contentbx">
            <div class="formbx px-5 bg-success rounded shadow">
                    <p class="text-uppercase text-center fs-2 fw-bold text-white font-sans-serif">Login</p>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="input-fields">
                        <div class="inputbx">
                            <span>Username</span>
                            <input type="text" name="Lusername" id="username" required autofocus>
                        </div>
                        <div class="inputbx">
                            <span>Password</span>
                            <input type="password" name="Lpassword" id="password">
                        </div>
                        <div class="validation-message "></div>
                        <div class="remember">
                            <label><input type="checkbox" name=""> Remember Password</label>
                        </div>
                        <div class="inputbx">
                            <button type="button" class="btn btn-success" id="btn-login">Login</button>
                            <!-- <input type="submit" value="Login" id="btn-login" name=""> -->
                        </div>
                </form>
                        <div class="inputbx">
                            <p>Don't have any an account? <a href="sign_up.php" class="text-white badge bg-primary text-wrap p-2 fs-6" style="width: 5rem;">Sign up</a></p>
                        </div>
                    </div>
                <p class="text-center fs-5">Login with other Social Media Account</p>
                <ul class="soc ms-auto text-center">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </ul>
            </div>
        </div>
    </section>

    <script>
                   function myFunction() {
                    $('#btn-login').click(function () {
                    var username = $('#username').val(),
                    password= $('#password').val(),
                    validation_message= $('.validation-message');

                   

                   if (username=="" || password=="") {
                        validation_message.addClass('alert alert-warning');
                        validation_message.html("The fields are empty");
                   }else
                   {
                       $.ajax(
                           {
                               url: "assets/loginUser.php",
                               method: "POST",
                               data:{
                                   loginn:1,
                                   usernamePHP:username,
                                   passwordPHP:password
                               },
                               success: function (dataa) {
                                   if (dataa) {
                                      validation_message.addClass('alert alert-success');
                                        validation_message.html("Login Success");
                                        window.location.href ='wecare.php';
                                        console.log(dataa);
                                        
                                   } else
                                   {
                                       validation_message.addClass('alert alert-danger');
                                       validation_message.html("The username and password you input is not connected to an Account.")
                                   }
                               }
                               
                           }
                       )
                   }
               })
        }
    </script>





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
                <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
   <?php include "footer.php"; ?>
</body>
</html>