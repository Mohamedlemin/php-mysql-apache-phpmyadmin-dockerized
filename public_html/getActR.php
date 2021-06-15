<?php
include "cnx.php";
 $fichier = fopen('compt_r.txt', 'r+'); 
 $ordre = fgets($fichier); // On lit la première ligne (nombre de pages vues)

 $sqlR = mysqli_query($con,"SELECT ordre FROM temp_r WHERE ordre = $ordre");
 
$array = array();

while ($lignR =mysqli_fetch_assoc($sqlR)){
 
	array_push($array,$lignR);
}

echo json_encode($array);


?>
