<?
require_once "cnx.php";
$array = array();

$sqlR = mysqli_query($con,"SELECT max(ordre) as longR from temp_r");

$array = array();

while ($lign =mysqli_fetch_assoc($sqlR)){
 
	array_push($array,$lign);
}

echo json_encode($array);

?>