<?php

$host = "0.0.0.0:3306";
$hostname = "root";
$hostpassword = "root";
$database = "Wakala";

$conn = mysqli_connect($host, $hostname, $hostpassword, $database);

if (!$conn){
    die("connection error: " . "<br>" . mysqli_connect_error());
}