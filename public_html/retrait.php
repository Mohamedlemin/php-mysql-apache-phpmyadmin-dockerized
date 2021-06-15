<?php 

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/font.css" />
    <style>
    .grid {
        display:flex;
        align-items:center;
        justify-content:center;
        margin-top:100px;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  align-items: stretch;
  }

.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  border-radius: 3px;
  text-align: center;
}

.grid > article:hover{
  transition: transform .1s ease-out;
  transform: translateY(5px);
}

.grid > article img {
}


.text {
  padding: 0 20px 20px;
}

.text > h3{
  text-transform: uppercase;
}

.text > button {
  background: linear-gradient(to right, #f030a7, #f0308d, #f03061);
  border-radius: 3px;
  border: 0;
  color: white;
  padding: 10px;
  width: 100%;
  font-weight: 600;
  text-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  text-transform: uppercase;
}
.logo-img{
    width:19%;
}

@media (max-width: 768px){
  .grid{
    grid-template-columns: repeat(2, 1fr);
    margin: 0;
  }
}

@media (max-width: 500px){
  .grid{
    grid-template-columns: repeat(1, 1fr);
    margin: 0;
  }

  .grid > article{
    text-align: center;
  }
  .grid > article img{
margin:auto;  }
}
.trr{
display:flex;
justify-content:center;
align-items:center;
}

    </style>
    <title>Document</title>
</head>
<body>

<main class="grid">

          <article>
            <div class="text">
              <h3>Retrait</h3>
              <hr>
              <h4>Numero Actuelle</h4>
              <p id="act_R"></p>
              <h4>Longeur d la file d'attente</h4>
              <p id="longR"></p>
              <a href="qr-ret.php"  class="button pulse">Joindre la file d'attente</a>
            </div>
          </article>
         
        </main>
</body>



<script type='text/JavaScript'>

function go(){
  $('#longR').load('ajax-long-r.php');
  $('#act_R').load('compt_r.txt');  
  }
 setInterval(function(){ go(); }, 1000);

</script>

</html>


