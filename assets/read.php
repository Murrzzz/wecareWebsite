<?php

require 'dbh.php';
    $username= $_SESSION['username'];

    $queryAdmin = "SELECT * FROM admin_acc";
    $sqlAdmin = mysqli_query($conn,$queryAdmin);

    $queryCategory = "SELECT * FROM category_admin";
    $sqlCategory = mysqli_query($conn,$queryCategory);

    $queryChannel = "SELECT * FROM channel_admin";
    $sqlChannel = mysqli_query($conn,$queryChannel);

    $queryTime = "SELECT * FROM admin_time";
    $sqlTime = mysqli_query($conn,$queryTime);

    $queryRequest = "SELECT * FROM request where v_username = '$username' and status='process'" ;
    $sqlRequest = mysqli_query($conn,$queryRequest);

    $queryRequestList = "SELECT * FROM request where status='approved' or status='rejected' and  v_username = '$username'";
    $sqlRequestList = mysqli_query($conn,$queryRequestList);


?>