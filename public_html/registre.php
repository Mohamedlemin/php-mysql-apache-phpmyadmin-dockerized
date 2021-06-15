<?php
 include "cnx.php";

$e_mail=$_POST['email'];
$pass=$_POST['pass'];

$sql1=mysqli_query($con, "INSERT into compte (email,pass) values ('$e_mail','$pass')");


if (!$sql1)
{
   
    exit();
  
}
else {
	echo"";
	
}



?>