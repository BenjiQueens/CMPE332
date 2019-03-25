<!DOCTYPE html>
<html>
<body>
  <h2>
    Switch <?php echo $_POST['session'];?>
  </h2>
  <?php
  $name = $_POST['session'];
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $query = 'SELECT *
            FROM sessions
            ORDER BY sess_date'
            ;
  $stmt = $pdo->query($query);
  echo "<table><tr><th>Sessions</th><th>Location</th><th>Date</th><th>Time</th></tr>";
  while ($row = $stmt->fetch())
  {
      echo "<tr><td>".$row["sess_name"]."</td><td>".$row["location"];
      echo "</td><td>".$row["sess_date"]."</td><td>".$row["start_time"]."</th></tr>";
  }
  echo "</table><br><br><br>";
  $query = 'SELECT *
            FROM sessions
            WHERE sess_name = ?';
  $stmt = $pdo->prepare($query);
  $stmt ->execute([$name]);
  echo "<h3>Location: </h3>".$stmt->fetch()["location"] ;
  $stmt ->execute([$name]);
  echo "<h3>Date: </h3>".$stmt->fetch()["sess_date"] ;
  $stmt ->execute([$name]);
  echo "<h3>Time: </h3>".$stmt->fetch()["start_time"] ;
  ?>
</table>
</body>
</html>
