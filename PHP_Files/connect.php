<?php 


$servername = "localhost";
$username = "root";
$password = ""; 
$database = "efarming_db";

$conn = new mysqli($servername, $username, $password, $database);

if($conn){
 echo "-";
}else{
 echo "no";
}












 ?>