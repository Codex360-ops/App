<?php
  $hostname = "sql100.infinityfree.com";
  $username = "if0_40512385";
  $password = "DCg88KYlV9UQ7Sl";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Erreur de connexion à la base de données".mysqli_connect_error();
  }
?>
