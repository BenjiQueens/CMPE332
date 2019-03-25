<!DOCTYPE html>
<html>
<body>
  <h2>
    Switch <?php echo $_POST['name'];?>
  </h2>
  <?php
  $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
  $name =  $_POST['name'];
  $loc = $_POST['loc'];
  $time =  $_POST['time'];
  $date =  $_POST['date'];
  $query = 'DELETE FROM sessions
            WHERE sess_name = ?';
  $stmt = $pdo->prepare($query)->execute([$name]);
  $query = 'INSERT INTO sessions
            VALUES (?,?,?,?, NULL)';
  $stmt = $pdo->prepare($query)->execute([$name,$loc,$date,$time]);
  header("Location: http://localhost/index.php");
  ?>
</table>
</body>
</html>
