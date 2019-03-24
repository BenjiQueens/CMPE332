<!DOCTYPE html>
<html>
<body>
  <h2>
    Schedule for <?php echo $_POST['date'];?>
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $value = $_POST['date'];
  $query = 'SELECT *
            FROM sessions
            WHERE sess_date= ?';
  $stmt = $pdo->prepare($query);
  $stmt->execute([$value]);
  echo "<table><tr><th>Name</th><th>Location</th><th>Start time</th></tr>";
  while ($row = $stmt->fetch())
  {
    echo "<tr><td>".$row["sess_name"]."</td><td>".$row["location"]."</td><td>".$row["start_time"]."</td></tr>";
  }
  ?>
</table>
</body>
</html>
