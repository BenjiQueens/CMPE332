<!DOCTYPE html>
<html>
<body>
  <h2>
    Jobs for <?php echo $_POST['companyjob'];?>
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $value = $_POST['companyjob'];
  $query = 'SELECT *
            FROM job
            WHERE company_name= ?';
  $stmt = $pdo->prepare($query);
  $stmt->execute([$value]);
  echo "<table><tr><th>Name</th><th>Location</th><th>Pay</th></tr>";
  while ($row = $stmt->fetch())
  {
      echo "<tr><td>".$row["job_title"]."</td><td>".$row["city"]."</td><td>".$row["pay"]."</td></tr>";
  }
  ?>
</table>
</body>
</html>
