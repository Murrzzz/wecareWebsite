<?php

$server_name="localhost";
$server_username="root";
$server_password="";
$database_name="wecare_database";

$conn = new mysqli($server_name, $server_username, $server_password, $database_name);

if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error." Please contact the Admin");
}