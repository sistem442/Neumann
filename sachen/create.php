<?php
  include '../db.php';
  $artikelname = $_POST["artikelname"];
  $artikelnummer = $_POST["artikelnummer"];
  $bild= $_POST["bild"];
  $bestand = $_POST["bestand"];
  $sql = "insert into sachen (artikelname, artikelnummer,bild,bestand) values ('$artikelname', '$artikelnummer','$bild','$bestand')";
 // var_dump($sql);
  //die;
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>