<?php 
include "cnx.php";

    $nom=$_POST["nom"];
    $tel=$_POST["tel"];

    $cherchR = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");

    if (mysqli_num_rows($cherchR)>0){
      // Client deja dans la base
           $rw = mysqli_fetch_assoc($cherchR) ;
           $id_c =$rw['id_cl'];
           $date =date('Y-m-d');
           $ins_R = mysqli_query($con,"INSERT into temp_r (date_r,id_c) values ('". $date . "', '" .$id_c ."')");
      if(!$ins_R){
        exit();
        }
        else{
            echo"";
        }

      }
    
         
  // Client n'est pas dans la base
   else{
       $insert_c= mysqli_query($con, "INSERT into client (nom,tel) values ('". $nom . "', '" .$tel ."')");
       if($insert_c)
       {
       $searchR = mysqli_query($con,"SELECT * from client where nom ='$nom' and tel ='$tel' ");
       if (mysqli_num_rows($searchR)>0) {

            $rowR = mysqli_fetch_assoc($searchR);
                $id_c =$rowR['id_cl'];
                $date =date('Y-m-d');
           $insert_R = mysqli_query($con, "INSERT into temp_r (date_r,id_c) values ('". $date . "', '" .$id_c ."')");  
          
           if(!$insert_R){
            exit();
        }
        else{
            echo"";
        }
    }
                                              
          } 
           
  

}

   ?>