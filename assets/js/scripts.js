(function () {
  
    var app={
        initialize: function () {
            this.login.initialize();
            this.register.initialize();
        },
        login:{
            initialize:function () {
                this.loginUser();
            },
            loginUser:function () {
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
        },
        register:{
            initialize:function () {
                console.log("Hellog")
                this.registerUser();
            },
            registerUser: function () {
                $('#btn-signin').click(function () {
                    var allfields =$('.inputbx input'),
                    fullname= $('#fullname').val(),
                    email=$('#email').val(),
                    username= $('#username').val(),
                    password= $('#password').val(),
                    cpassword= $('#cpassword').val(),
                    validation_m= $('.validation-message');

                    
                    var allfaields_valid = false;
                        blank_counter=0;
                    
                        allfields.each(function () {
                            var value= $(this).val();
                            if (value =='') {
                                blank_counter++;
                            }

                            if (blank_counter >=1) {
                                allfaields_valid=false;
                            } else {
                                allfaields_valid=true;
                            }
                        });
                    
                    if (allfaields_valid) {
                        if (password == cpassword) {
                            $.ajax(
                                {
                                    url: "assets/registerUser.php",
                                    method: "POST",
                                    data:{
                                        fullname:fullname,
                                        username:username,
                                        email:email,
                                        password:password,

                                    },
                                    success:function (data) {
                                        if (data) {
                                            validation_m.addClass('alert alert-success');
                                            validation_m.html("Register Success");
                                        } else {
                                            validation_m.addClass('alert alert-danger');
                                            validation_m.html("Your username and password is not connected to your account")
                                        }
                                    }
                                }
                            )
                        } else {
                            validation_m.addClass('alert alert-danger');
                            validation_m.html("Please Check your Password!");
                        }
                    } else {
                        validation_m.addClass('alert alert-danger');
                        validation_m.html("Please Check your textboxes you have blanks")
                    }

                    
                
                })
            }
        }
    }    








    $(document).ready(function () {
        app.initialize();
    });
}());