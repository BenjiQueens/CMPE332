<!DOCTYPE html>
<html>
<body>
  <h2>
    Breakdown
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $query = 'SELECT name,cost_due
            FROM attendee
            WHERE attendee_type="sponsor"';
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $totalSpons = 0;
  while ($row = $stmt->fetch())
  {
    $totalSpons = $totalSpons + $row["cost_due"];
    echo "<p>".$row["name"]." is paying ".$row["cost_due"];
  }
    echo "<p><h1>".$totalSpons." </h1>is the total spons money";

  $query = 'SELECT name,cost_due
            FROM attendee
            WHERE attendee_type!="sponsor"';
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $totalSpons = 0;
  while ($row = $stmt->fetch())
  {
    $totalSpons = $totalSpons + $row["cost_due"];
    echo "<p>".$row["name"]." is paying ".$row["cost_due"];
  }
    echo "<p><h1>".$totalSpons." </h1>is the total attendee money";


  ?>
</table>
</body>
</html>
