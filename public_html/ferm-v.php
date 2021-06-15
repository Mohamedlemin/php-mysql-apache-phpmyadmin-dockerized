<html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <title>Document</title>
 </head>
 

<?php
include "cnx.php";
include "caisier-v.php";

$supp_abs =mysqli_query($con,"DELETE from abscence where service='Versement'");
$transf =mysqli_query($con,"INSERT INTO `versement`(`ordre`, `date_v`, `id_cl`) SELECT * FROM temp_v");
if($transf){
    $supp =mysqli_query($con,"DELETE FROM `temp_v` ");
    $id =mysqli_query($con,"ALTER TABLE temp_v AUTO_INCREMENT =1");

if($supp && $id){


    $fichier = fopen('compt.txt', 'r+'); // la ressource vers notre fichier
    $act = fgets($fichier); // On lit la première ligne (nombre de pages vues)
    $act =0; // On augmente de 1 ce nombre de pages vues
    fseek($fichier, 0); // On remet le curseur au début du fichier
    fputs($fichier, $act); // On écrit le nouveau nombre de pages vues
    fclose($fichier);

}

}
?>

