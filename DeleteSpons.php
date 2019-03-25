<!DOCTYPE html>
<html>
<body>
  <h2>
    Deleting<?php echo $_POST['companydel'];?>
  </h2>
  <?php
    $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
    $name = $_POST['companydel'];
    $query = 'DELETE FROM sponsor
              WHERE company_name=?';
    $stmt = $pdo->prepare($query)->execute([$name]);
    $query = 'DELETE FROM attendee
              WHERE name = ?';
    $stmt = $pdo->prepare($query)->execute([$name]);
    $query = 'DELETE FROM company
              WHERE company_name= ?';
    $stmt = $pdo->prepare($query)->execute([$name]);
  ?>
</table>
</body>
</html>
