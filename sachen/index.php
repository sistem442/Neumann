<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">

  <h1>Fachboden Verwaltung</h1>
  

  <table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>

 <form class="form-inline m-2" action="create.php" method="POST">
    <label for="name">Reihe:</label>
    <input type="text" class="form-control m-2" id="reihe" name="reihe">
    <label for="score">Spalte:</label>
    <input type="number" class="form-control m-2" id="spalte" name="spalte">
    <label for="score">Fachböden:</label>
    <input type="number" class="form-control m-2" id="fachboden" name="fachboden">
    <button type="submit" class="btn btn-primary">Hinzufügen</button>
  </form>

</div>

</body>
</html>