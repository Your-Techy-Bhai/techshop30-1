<?php

$username = "arnav";
$password = "techshop@30";
$database = "usersta3";
$server = "phpmyadmin";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn){
    echo "success";
}else{
    die("Error".mysqli_connect_error());
}
;

?>