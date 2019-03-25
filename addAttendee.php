<!DOCTYPE html>
<html>
<body>
  <h2>
    Adding <?php echo $_POST['name']." as a ".$_POST['type'];?>
  </h2>
  <?php
    $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
    $name = $_POST['name'];
    $type= $_POST['type'];
    $query1 = 'SELECT ID FROM attendee';
    $count = 10000;
    $IDAvail = 1;
    $payment = 10;
    $er = 1;
    $stmt1 = $pdo->query($query1);
    $IDs = array();
    while($row = $stmt1->fetch()){
      array_push($IDs,$row["ID"]);
    }
    while($IDAvail == 1){
      $IDAvail = 0;
      $count = $count +1;
      foreach($IDs as $ID){
        if($ID == $count){
          $IDAvail = 1;
        }
      }
    }

    switch($type){
      case "Sponsor":
          $payment=0;
          break;
      case "Student":
          $payment = 50;
          $room = 17;
          break;
      case "Professional":
          $payment = 100;
          break;
      default:
        $er = 0;
    }

    try {
      if ($er == 0){
        throw new \Exception("Error Processing Request", 1);
      }
    }catch(Exception $er)
    {
      echo 'Please state if they are a sponsor, student, or professional';
    }

    try{
      if(strlen($name) > 20){
        $payment =10;
          throw new \Exception("Name Invalid", 1);
      }
    }catch(Exception $e)
    {
      echo 'Please enter a name under 20 characters';
    }
    $query = 'INSERT INTO attendee VALUES (?,?,?,?)';
    $stmt = $pdo->prepare($query);
    try {
      if($payment==10){
        throw new \Exception("Error",2);
      }
      $stmt ->execute([$count,$name, $type, $payment]);
      echo "<p><p> adding succesful";
    }catch (Exception $e){
      echo "<p><p>adding unsuccesful";
    }
    if($type == "Student"){
      $sql =  'INSERT INTO student VALUES (?,?)';
      $sql1 = 'SELECT room_number FROM student';
      $stmt = $pdo->prepare($sql);
      $stmt ->execute([$count, $room]);
      echo "<p>added to room ".$room;
    }

  ?>
</table>
</body>
</html>
