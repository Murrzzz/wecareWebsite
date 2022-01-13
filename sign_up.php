<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale.0">
    <title>We Care | Sign Up</title>
    <link rel="shortcut icon" type="image" href="Image/L.png">
    <link rel="stylesheet" type="text/css" href="CSS/sign_up.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
        <?php include "header_login.php"; ?>            
    <section>
        <div class="contentbx">
            <div class="formbx px-5 p-3 mt-5 bg-success rounded shadow">
                    <p class="text-uppercase text-center fs-2 fw-bold text-white font-sans-serif">Sign Up</p>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="inputbx">
                        <label for="validationCustom01" class="form-label">Full name</label>
                        <input type="text" name="fullname" class="form-control" id="fullname disabledInput" required autofocus>
                        <div id="passwordHelpBlock" class="form-text text-white fst-italic">
                        (Sname, Fname M.I)
                        </div>
                    </div>
                    <div class="inputbx">
                        <label for="name">Email</label>
                        <input  id="inputEmail" class="form-control" type="email" data-error="Bruh, that email address is invalid" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            The e-mail is required!
                        </div>
                        <div class="help-block with-errors"></div>
                        <div id="passwordHelpBlock" class="form-text text-white fst-italic">
                            (e.i example@gmail.com)
                        </div>
                    </div>
                    <div class="inputbx">
                    <label for="validationCustom01" class="form-label">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="inputbx">
                    <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" required minlength="8">
                        <div class="valid-feedback">
                        Great!
                    </div>
                    <div class="invalid-feedback">
                        The password must contain at least 8 characters!
                    </div>
                        <div id="passwordHelpBlock" class="form-text text-white fst-italic">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="inputbx">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" required minlength="8">
                    <div class="valid-feedback">
                        Great!
                    </div>
                    <div class="invalid-feedback">
                        The password must contain at least 8 characters!
                    </div>
                    </div>
                    <div class="validation-message"></div>
                    <div class="remember">
                        <label><input type="checkbox" onClick="myFunction()"> Show Password</label>
                    </div>
                    <br><br>
                    <div class="mt-3">
                        <button type="button" value="Sign up" class="btn btn-success btn-lg" id="btn-signin" onClick="Myfunction()">Sign Up</button>
                        <!-- <input type="submit" value="Sign up" name="" id="btn-signin"> -->
                    </div>
                </form>
                    <br>
                    <div class="inputbx">
                    <p>Already have an Account? <a href="login.php" class="text-white badge bg-primary text-wrap p-2 fs-6">Login</a></p>
                    </div>
                
                    <p class="text-center fs-5">Login with other Social Media Account</p>
                <ul class="soc">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </ul>
            </div>
        </div>
    </section>


                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
                <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
                
  <?php include "footer.php"; ?>
    <script>
        function myFunction() {
          var cpass = document.getElementById("cpassword"),
                pass= document.getElementById("password");
            

            if (pass.type === "password" || cpass.type === "password") {
                    pass.type = "text";
                    cpass.type ="text";
                } else {
                    pass.type = "password";
                    cpass.type ="password";
                }
        }
    </script>
            <script>
                (function Myfunction() {
                    window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');

                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                        }, false);
                    });
                    }, false);
                })();
            </script>
        
</body>
</html>