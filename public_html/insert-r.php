<html lang="en">
<head>
	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
<?php 
session_start();
include "cnx.php";
include "rtr.php";

// Retrait
   
    $nom=$_POST["nom"];
    $tel=$_POST["tel"];

    $cherchR = mysqli_query($con,"SELECT * from client where tel ='$tel' ");

    if (mysqli_num_rows($cherchR)>0){

      // Client deja dans la base
           $rw = mysqli_fetch_assoc($cherchR) ;
           $id_c =$rw['id_cl'];
           $date =date('Y-m-d');

           $ins_R = mysqli_query($con,"INSERT into temp_r (date_r,id_c) values ('". $date . "', '" .$id_c ."')");
      if($ins_R){

       ?>
       <script>
        swal({
          title:"Super!",
          text: "Vous Avez été ajoutée à la file !",
          icon: "success"
      }).then(function() {
          window.location = "rt-info.php";
      });

      </script>
<?php
      }
    }
         
  // Client n'est pas dans la base
   else{
       $insert_c= mysqli_query($con, "INSERT into client (nom,tel) values ('". $nom . "', '" .$tel ."')");
       if($insert_c)
       {
       $searchR = mysqli_query($con,"SELECT * from client where tel ='$tel' ");
       if (mysqli_num_rows($searchR)>0) {

            $rowR = mysqli_fetch_assoc($searchR);
                $id_c =$rowR['id_cl'];
                $date =date('Y-m-d');
           $insert_R = mysqli_query($con, "INSERT into temp_r (date_r,id_c) values ('". $date . "', '" .$id_c ."')");  
          
           if($insert_R){
               ?>
              <script>
               swal({
                 title: "Super!",
          text: "Vous Avez été ajoutée à la file !",
                 icon: "success"
             }).then(function() {
                 window.location = "rt-info.php";
             });
 
             
             </script>
 <?php
             } 
          }
                                              
          } 
           
  

}

   ?>