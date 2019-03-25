<!DOCTYPE html>
<html>
<body>
  <h2>
    All Jobs
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $query = 'SELECT *
            FROM job';
  $stmt = $pdo->query($query);
  echo "<table><tr><th>Company Name</th><th>Title</th><th>Location</th></tr>";
  while ($row = $stmt->fetch())
  {
      echo "<tr><td>".$row["company_name"]."</td><td>".$row["job_title"]."</td><td>".$row["province"]."</td></tr>";
  }
  ?>
</table>
</body>
</html>
