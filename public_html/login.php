<?php
 include "cnx.php";

 $email = $_GET['email'];
 $pass = $_GET['pass'];


$sql1=mysqli_query($con,"SELECT * from compte where email='$email' and pass='$pass'");

$array = array();

while ($lign =mysqli_fetch_assoc($sql1)){
 
	array_push($array,$lign);
}

echo json_encode($array);

?>
