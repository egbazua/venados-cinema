<?php
  $host="108.179.194.55";
  $port=3307;
  $socket="";
  $user="quantic3_venadoscinema";
  $password="venadoscinema123";
  $dbname="quantic3_venadoscinema";

  $conexion = new mysqli($host, $user, $password, $dbname)
      or die ('Could not connect to the database server' . mysqli_connect_error());
?>