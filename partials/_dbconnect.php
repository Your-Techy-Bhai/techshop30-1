<?php

$username = "root";
$password = "";
$database = "usersta3";
$server = "localhost";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn){
    echo "success";
}else{
    die("Error".mysqli_connect_error());
}
;

?>