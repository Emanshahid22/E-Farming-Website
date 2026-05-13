<?php 
require_once 'connect.php';

function display_data(){
	global $conn;
	$query = "select * from `order`"; 

$result = mysqli_query($conn, $query);
return $result;


}

function display_data2(){
    global $conn;
    $query = "select * from `payment`"; 

$result2 = mysqli_query($conn, $query);
return $result2;


}
function display_data3(){
    global $conn;
    $query = "select * from `farm_product`"; 

$result2 = mysqli_query($conn, $query);
return $result2;


}
// require_once 'connect.php';

// function display_data(){
//     global $conn;
//     $query = "SELECT * FROM order ";
//     $stmt = mysqli_prepare($conn, $query);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
    
//     if (!$result) {
//         die('Error: ' . mysqli_error($conn));
//     }
    
//     return $result;
// }







 ?>