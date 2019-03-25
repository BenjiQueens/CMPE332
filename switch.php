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
  echo "</table><br><br><br><form action='switch2.php' method='post'>";
  $query = 'SELECT *
            FROM sessions
            WHERE sess_name = ?';
  $stmt = $pdo->prepare($query);
  $stmt ->execute([$name]);
  echo "<h3>Location: </h3>".$stmt->fetch()["location"]."
    <select name='loc'>
      <option value='Ellis'>Ellis</option>
      <option value='Jeffrey'>Jeffrey</option>
      <option value='Stage'>Stage</option>
      <option value='Main Building'>Main Building</option>
    </select><br>";
  $stmt ->execute([$name]);
  echo "<h3>Date: </h3>".$stmt->fetch()["sess_date"]."
    <select name='date'>
      <option value='2019-03-12'>2019-03-12</option>
      <option value='2019-03-13'>2019-03-13</option>
      <option value='2019-03-14'>2019-03-14</option>
      <option value='2019-03-15'>2019-03-15</option>
    </select><br>" ;
  $stmt ->execute([$name]);
  echo "<h3>Time: </h3>".$stmt->fetch()["start_time"]."
    <select name='time'>
      <option value='10:00:00'>10:00:00</option>
      <option value='14:00:00'>14:00:00</option>
      <option value='17:00:00'>17:00:00</option>
      <option value='20:00:00'>20:00:00</option>
    </select><br>";
    echo "<h3>Name: </h3>".$name."
     <select name='name'><option value='$name'>".$name."</option></select>" ;
  echo "<br><br><input type='submit' value='Confirm Switch'></form>";
  ?>
</table>
</body>
</html>
