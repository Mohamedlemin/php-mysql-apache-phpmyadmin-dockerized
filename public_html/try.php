<? 
session_start();
require("session.php");
if (ret::isloggedR()){
}
else
{
    header('location:login-agent.php');
}
require_once "r-menu.php"; 
require_once "cnx.php";
?>

<html lang="en">
<head>

	<title>Fil D'attente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="css/font.css" />
  <link rel="stylesheet" href="css/agent-list.css">
  <link rel="stylesheet" type="text/css" href="css/cais.css" />
  <link rel="stylesheet" type="text/css" href="css/float.css" />

<style>
  
.bottn {
	background-color: seagreen;
	border: 0;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	top: 400px;
	left: 850px;
	position: absolute;
  letter-spacing: 1px;
}

.abs{
  background-color: firebrick;
  width :200px;
  margin:20px;
  padding :10px;
  border-radius:2px;
  color:white;
  text-align:center;
}

</style>
</head>
<body>
<?php
  include "cnx.php";
   $query ="SELECT * from abscence where service='Retrait'";
   $query_run =mysqli_query($con,$query);
	 ?>
 
<div class="container">
<div class="card">
	<div class="wrap-table100">
		<div class="table100">
			<table>
				<thead>
					<tr class="table100-head">
						<th class="column1">Ordre</th>
						<th class="column2">Nom</th>
						<th class="column3">Telephone</th>
						<th class="column2">Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php
		     if (mysqli_num_rows($query_run)>0) {
		        while ($row = mysqli_fetch_row($query_run)) {
					echo "<tr>
					<td 'column1'>$row[1]</td>
					<td 'column2'>$row[2]</td>
					<td 'column3'>$row[3]</td>
				
           <td 'column2'> 
           <a onclick=\"return sonclick=\"return confirm('Are you sure?')\" href='supp-abs.php?idab=$row[0]'>Supprimer</i></a>
					</tr>";
						  }
						 
						}
				
					 else {
						 echo "aucun enregistrement";
					}

						 ?>
				</tbody>
			</table>
		</div>
	</div>

</div>

<div class="action" onclick="actionToggle();" >
<span>+</span>
<ul>
 
<li><a class="lien" href="try.php">Liste des Abscents</a></li>
<li><a class="lien" href="ferm.php">Fermer l'application</a></li>
<li><a class="lien" href="logout-r.php">Deconnection</a></li>

</ul>
</div>
<script type='text/JavaScript'>
function actionToggle(){
  var action = document.querySelector('.action');
  action.classList.toggle('active');
}

</script>
</body>
<script type='text/JavaScript'>

function go(){
  $('#longV').load('ajax-long-v.php');
  $('#longR').load('ajax-long-r.php');
  $('#act_R').load('compt_r.txt');  
  $('#act_V').load('compt_v.txt');
  }
 setInterval(function(){ go(); }, 1000);

</script>
</html>



