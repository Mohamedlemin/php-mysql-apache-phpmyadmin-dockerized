<?php 
require_once "cnx.php";

$sqlR = mysqli_query($con,"SELECT max(ordre) as longR from temp_r");
if (mysqli_num_rows($sqlR)>0){
		 $rowR = mysqli_fetch_assoc($sqlR) ;
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="refresh" content="2;url=index.php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	<title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/font.css">
  <link rel="stylesheet" type="text/css" href="css/info.css">

</head>
<body>
<div class="container center">
  <div class="card">
	  <img class="img img-responsive" src="images/logo.png"></img>
    <h2 ><?php echo $rowR['longR'];?></h2>
	<p>Retrait</p>
	<p id="date"></p>
  </div>
</div>
<script>

n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();

document.getElementById("date").innerHTML = d + " - " + m + " - " + y;
	//window.print();
  
</script>
</body>
</html>