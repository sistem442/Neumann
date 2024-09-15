<?php
  include '../db.php';
  $spalte = $_POST["spalte"];
  $reihe = $_POST["reihe"];
  $aaa = $_POST["fachboden"];
  $sql = "insert into fachboden (spalte, reihe,fachboden) values ('$spalte', '$reihe','$aaa')";
 // var_dump($sql);
  //die;
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>