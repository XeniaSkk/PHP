<?php

$servername = "localhost"; 
$dBUsername = "root";
$dBPassword = "";
$dBName = "project_php_01";

$conn = mysqli_connect($servername, $dBUsername, $dBPasssword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>