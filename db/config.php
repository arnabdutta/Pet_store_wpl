<?php
error_reporting(0);
$conn=mysqli_connect("127.0.0.1","root","","petstore");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

mysqli_select_db("petstore",$conn);

?>
