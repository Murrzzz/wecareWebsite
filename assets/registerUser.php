<?php

include "dbh.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$date= date("Y-m-d");
$time= date("H:i:sa");


$fullname = strip_tags($fullname);
$email = strip_tags($email);
$username = strip_tags($username);
$password = strip_tags($password);

// Encrypt password
$cipher_method = 'AES-128-CTR';
$option = 0;
$encryption_iv = '7893475893479853';
$encryption_key = 'univcalcitycrypt';
$encrypted_password = openssl_encrypt($password, $cipher_method, $encryption_iv, $option, $encryption_key);

$sql = "INSERT INTO user_acc (v_fullname, v_username, v_password, d_date_created, d_time_login, v_email) VALUES ('".$fullname."','".$username."','".$encrypted_password."','".$date."','".$time."','".$email."')";

if ($conn->query($sql) === TRUE) {
    echo true;
}else
{
    echo false;
}

$conn->close();


?>