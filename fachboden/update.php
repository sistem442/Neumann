<?php
  include '../db.php';
  $id = $_POST['id'];
  $reihe = $_POST['reihe'];
  $spalte = $_POST['spalte'];
  $fachboden = $_POST['fachboden'];
  $sql = "update fachboden set reihe='$reihe', spalte='$spalte', fachboden='$fachboden' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php?id=".$id);
?>