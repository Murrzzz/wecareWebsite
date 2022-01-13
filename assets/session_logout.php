<?php

//  I use this session for logout to invalid the status of the user
require 'dbh.php';
session_start();

$_SESSION['status'] = 'invalid';
if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) 
{
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['username']);
    echo "<script>window.location.href = '/Counseling_Website/login.php'</script>";
}

?>