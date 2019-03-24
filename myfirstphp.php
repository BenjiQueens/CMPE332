<!DOCTYPE html>
<html>
<body>
  <h2>
    Sponsor Info
  </h2>
<?php
  // $givenName= $_POST['firstname'];   #firstnameis the name of the element in form$surname = $_POST[“lastname”];
  // echo "<h3> Hello $givenName</h3>";
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $stmt = $pdo->query('SELECT company_name, sponsor_level FROM company');
  echo "<table><tr><th>Company</th><th>Tier</th></tr>";
  while ($row = $stmt->fetch())
  {
    echo "<tr><td>".$row["company_name"]."</td><td>".$row["sponsor_level"]."</td></tr>";
  }
?>
</table>
</body>
</html>
