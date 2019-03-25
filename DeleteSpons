<!DOCTYPE html>
<html>
<body>
  <h2>
    Adding <?php echo $_POST['CompName'];?>
  </h2>
  <?php
    $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', 'root', '');
    $name = $_POST['CompName'];
    $query1 = 'SELECT ID FROM attendee';
    $count = 10000;
    $IDAvail = 1;
    $payment = 0;
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
    $sponsMoney = 0;
    $sponsTier = $_POST["spons"];
    switch($sponsTier){
      case "Platinum":
        $sponsMoney = 10000;
          break;
      case "Gold":
        $sponsMoney = 5000;
          break;
      case "Silver":
        $sponsMoney = 2000;
          break;
      case "Bronze":
        $sponsMoney = 1000;
          break;
      default:
        $sponsMoney = 0;
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
    $query = 'INSERT INTO attendee VALUES (?,?,"sponsor",?)';
    $stmt =$pdo->prepare($query)->execute([$count,$name,$sponsMoney]);
    $query = 'INSERT INTO company VALUES (?,1,?,NULL)';
    $stmt =$pdo->prepare($query)->execute([$name,$sponsTier]);
    $query = 'INSERT INTO sponsor VALUES (?,?)';
    $stmt = $pdo->prepare($query);
    $stmt ->execute([$count,$name]);
    // try {
    //   if($payment==10){
    //     throw new \Exception("Error",2);
    //   }
    //   echo $count."    ".$name;
    //   echo "<p><p> adding succesful";
    // }catch (Exception $e){
    //   echo "<p><p>adding unsuccesful";
    // }


  ?>
</table>
</body>
</html>
