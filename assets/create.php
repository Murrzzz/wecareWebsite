<?php

require 'dbh.php';
session_start ();

$reqUsername = $_SESSION['username'];
if (isset($_POST['add_request'])) { // this code is to add in the request
    
    $reqCategoryName = $_POST['v_category_name'];
    $reqChannelName = $_POST['v_channel_name'];
    $reqMessage = $_POST['v_message'];
    $reqTime = $_POST['time'];
    $reqStatus= "Process";

    echo $reqTime;

    $queryRequest = "INSERT INTO request (i_id, v_username, v_category_name, v_channel_name, time, v_message, status) VALUES(null, '$reqUsername', '$reqCategoryName','$reqChannelName','$reqTime','$reqMessage','$reqStatus')";
    $sqlRequest = mysqli_query($conn,$queryRequest);

    echo '<script> alert("Successful") </script>';
    echo "<script>window.location.href = '/Counseling_Website/request.php'</script>";
}
?>