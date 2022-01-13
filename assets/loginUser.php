<?php

require 'dbh.php';

// session_start is need to declare to use $_SESSION
session_start();


if (isset($_POST['loginn'])) {

$username = $_POST['usernamePHP'];
$password = $_POST['passwordPHP'];

 //MY WAYS TO PREVENT INJECTION HAHAH NAWA GUMANA HAHAHAHA

    $username= strip_tags($username);
    $password= strip_tags($password);

    $username= stripcslashes($username);
    $password= stripcslashes($password);

    $username= mysqli_real_escape_string($conn, $username);
    $password= mysqli_real_escape_string($conn, $password);

    //------------------------------------------------------------------


$cipher_method = 'AES-128-CTR';
$option = 0;
$decryption_iv = '7893475893479853';
$decryption_key = 'univcalcitycrypt';
$decrypted_password = openssl_encrypt($password, $cipher_method, $decryption_iv, $option, $decryption_key);

$sql = "SELECT * FROM user_acc WHERE v_username='".$username."' AND v_password='".$decrypted_password."'";

$result = $conn->query($sql);
$rowValidate= mysqli_fetch_array($result); // I use fetching array to get the username of the accounts

if ( $result->num_rows > 0 ) {
    $_SESSION['status'] = 'valid';// it is valid when the account is exist
    $_SESSION['fullname'] = $rowValidate['v_fullname']; // getting the fullname
    $_SESSION['username'] = $rowValidate['v_username']; //getting the username
    $_SESSION['email'] = $rowValidate['v_email']; //getting the username
    $_SESSION['dateCreated'] = $rowValidate['d_date_created']; //getting the username
    echo true;
}else
{
    $_SESSION['status'] = 'invalid'; // it is invlaid when the account does not exist
    echo false;
}

$conn->close();



}


?>