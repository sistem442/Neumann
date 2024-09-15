<?php
  include '../db.php';
  $id = $_GET['id'];
  $sql = "delete from fachboden where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: index.php?id=".$id);
?>