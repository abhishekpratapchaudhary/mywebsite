<?php 
$server = 'localhost';
$usser = 'root';
$pass = '';
$database = 'abhi';

$conn = new mysqli($server,$usser,$pass,$database);
if($conn->connect_error){
die('connection erroe:'.$conn->connect_error);
}

?>