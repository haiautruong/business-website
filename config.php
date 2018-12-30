<?php
 
$servername = "localhost";
 
$username = "root";
 
$password = "password";
 
$dbname = "datawebsales";
 
$conn = mysqli_connect($servername,$username,$password,$dbname);
 
if(!$conn){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}else{
 
 
}
 
?>