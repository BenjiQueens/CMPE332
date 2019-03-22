<!DOCTYPE html>
<html>
<body>
  <h2>
    Members of Room <?php echo $_POST['roomNum'];?>
  </h2>
  <?php
    $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
    $value = $_POST['roomNum'];
    $query = 'SELECT name
              FROM attendee, student
              WHERE attendee.ID=student.ID
              AND student.room_number=?;';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$value]);
    echo "<table><tr><th>Roomates</th></tr>";
    while ($row = $stmt->fetch())
    {
      echo "<tr><td>".$row["name"]."</td></tr>";
    }
  ?>
</table>
</body>
</html>
