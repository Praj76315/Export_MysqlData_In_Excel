<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'Company';
$conn =mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die(mysqli_error($conn));
}

?>