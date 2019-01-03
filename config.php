<?php
 
$servername = "localhost";
 
$username = "root";
 
$password = "";
 
$dbname = "datawebsales";
 
$conn = mysqli_connect($servername,$username,$password,$dbname);


 
if(!$conn){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}else{
 
   if (!$conn->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $conn->error);
      exit();
   } 
}
 
?>