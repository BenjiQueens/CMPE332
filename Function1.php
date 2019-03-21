<!DOCTYPE html>
<html>
<body>
  <h2>
    Employee Information
  </h2>
<?php
  $givenName= $_POST["firstname"];   #firstnameis the name of the element in form$surname = $_POST[“lastname”];
  echo "<h3> Hello $givenName</h3>";
  $dbh= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
  $rows = $dbh->query("select company_name from sponsor");
  foreach($rows as $row) {
    echo print_r($row);
  }
?>
</body>
</html>
