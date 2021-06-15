<?
require_once "cnx.php";
$array = array();

$sqlV = mysqli_query($con,"SELECT max(ordre) as longV from temp_v");

$array = array();

while ($lign =mysqli_fetch_assoc($sqlV)){
 
	array_push($array,$lign);
}

echo json_encode($array);

?>