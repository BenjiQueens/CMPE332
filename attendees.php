<!DOCTYPE html>
<html>
<body>
  <h2>
    Attendees
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $query1 = 'SELECT name, attendee_type
            FROM attendee
            WHERE attendee_type="student"';
  $stmt1 = $pdo->query($query1);
  $query2 = 'SELECT name, attendee_type
            FROM attendee
            WHERE attendee_type="Professional"';
  $stmt2 = $pdo->query($query2);
  $query3 = 'SELECT name, attendee_type
            FROM attendee
            WHERE attendee_type="Sponsor"';
  $stmt3 = $pdo->query($query3);
  echo "<table><tr><th>Student</th></tr>";
  while ($row = $stmt1->fetch())
  {
      echo "<tr><td>".$row["name"]."</td></tr>";
  }
    echo "</table><br><table><tr><th>Professional</th></tr>";
  while ($row = $stmt2->fetch())
  {
      echo "<tr><td>".$row["name"]."</td></tr>";
  }
  echo "</table><br><table><tr><th>Sponsor</th></tr>";
  while ($row = $stmt3->fetch())
  {
      echo "<tr><td>".$row["name"]."</td></tr>";
  }
  ?>
</table>
</body>
</html>
