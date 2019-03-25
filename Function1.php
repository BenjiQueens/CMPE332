<!DOCTYPE html>
<html>
<body>
  <h2>
    Employee Information
  </h2>
  <?php
    $query = "SELECT id FROM sys.TablesGO";
    $result = mysql_query ($query);
    echo "<select name=dropdown value=''>Dropdown</option>";
    while($row = mysql_fetch_array($result)){
    echo "<option value=$row[id]>$row[id]</option>";
    }
    echo "</select>";
  ?>
</body>
</html>
