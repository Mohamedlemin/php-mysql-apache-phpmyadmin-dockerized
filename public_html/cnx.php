<?php

$con = mysqli_connect("mysql", "root", "root", "db");
if (!$con) {
  die("erreur de type" . mysqli_connect_error());
} else "OK ";