<!DOCTYPE html>
<html>
<body>
  <h2>
    Committee Members for <?php echo $_POST['Subcommittee'];?>
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $value = $_POST['Subcommittee'];
  $query = 'SELECT first_name, last_name, committee_name
            FROM committee_list, member
            WHERE committee_name=?
            AND member.member_ID=committee_list.member_ID';
  $stmt = $pdo->prepare($query);
  $stmt->execute([$value]);
  echo "<table><tr><th>Members</th></tr>";
  while ($row = $stmt->fetch())
  {
    echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td></tr>";
  }
  ?>
</table>
</body>
</html>
