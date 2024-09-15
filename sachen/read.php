

<?php
  include '../db.php';
  $sql = "select * from fachboden";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if  ((isset($_GET["id"]))&&($row['id'] == $_GET['id'])) {
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
		  echo '<td><input type="text" class="form-control" name="reihe" value="'.$row['reihe'].'"></td>';
		  echo '<td><input type="number" class="form-control" name="spalte" value="'.$row['spalte'].'"></td>';
		  echo '<td><input type="number" class="form-control" name="fachboden" value="'.$row['fachboden'].'"></td>';
		  echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
		  echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } 
	else {
		echo "<td>" . $row['reihe'] . "</td>";
		echo "<td>" . $row['spalte'] . "</td>";
		echo "<td>" . $row['fachboden'] . "</td>";
		echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>