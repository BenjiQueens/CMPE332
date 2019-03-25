<?php
try {
    $dbh= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>TechCrunch Startup Battlefield</title>
</head>
<body>
    <div id="page">
        <div id="header">
        	<h1>TechCrunch Startup Battlefield</h1>
        </div>

        <!-- For the listing of subcomittee members F1 -->
      <div>
        <h2> Subcommittee Members </h2>
        <form action="committeeNames.php" method="post">
          <select name="Subcommittee" >
            <?php
              $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
              $comNames = "SELECT committee_name FROM sub_Committee";
              $stmt = $pdo->query($comNames);
              while($row = $stmt->fetch()){
                echo "<option value='".$row['committee_name']."'>".$row['committee_name']."</option>";
              }
            ?>
          </select>
          <input type="submit" value="Get Members">
        </form>
      </div>

      <!-- For the listing of students in a hotel room F2-->
      <div>
        <h2> Hotel Roomates </h2>
        <form action="Roomates.php" method="post">
          <p>Room Number:<p><input type="text" name="roomNum">
          <input type="submit" value="Get Room Info">
        </form>
      </div>

      <!--  For the display of the schedule in a particular day-->
      <div>
        <h2> Conference Schedule </h2>
        <form action="schedule.php" method="post">
          <select name="date">
            <?php
              $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
              $dates = "SELECT sess_date FROM sessions";
              $stmt = $pdo->query($dates);
              while($row = $stmt->fetch()){
                echo "<option value='".$row['sess_date']."'>".$row['sess_date']."</option>";
              }
            ?>
          </select>
          <input type="submit" value="Get Schedule">
        </form>
      </div>

      <!-- For the listing of sponsors F4 -->
      <div>
        <h2> Sponsor List </h2>
          <form action="myfirstphp.php" method="post">
            <!-- <p>First name:<p><input type="text" name="firstname"><br>
            <p>Last name: <p><input type="text" name="lastname"> -->
              <input type="submit" value="Get Sponsors">
          </form>
      </div>

      <!-- Company jobs F5 F6 -->
      <div>
        <h2> Job search </h2>
        <form action="jobsearch.php" method="post">
          <select name="companyjob">
            <?php
              $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
              $dates = "SELECT company_name FROM sponsor";
              $stmt = $pdo->query($dates);
              while($row = $stmt->fetch()){
                echo "<option value='".$row['company_name']."'>".$row['company_name']."</option>";
              }
            ?>
          </select>
          <input type="submit" value="Get Jobs">
        </form>
        <form action="joblist.php" method="post">
          <input type="submit" value="List All Jobs">
        </form>
      </div>

      <!-- List Attendees F7 -->
      <div>
        <h2> Attendees </h2>
          <form action="attendees.php" method="post">
              <input type="submit" value="Get Attendees">
          </form>
      </div>

      <!-- Add Attendees F8 -->
      <div>
        <h2> Add Attendee </h2>
        <form action="addAttendee.php" method="post">
          <p>Name:  <input type="text" name="name">
          <p>Attendee Type:  <input type="text" name="type">
          <br><br><input type="submit" value="Add Attendee">
        </form>
      </div>

      <!-- Add Attendees F9 -->
      <div>
        <h2> Get Money Breakdown </h2>
          <form action="money.php" method="post">
              <input type="submit" value="Get Breakdown">
          </form>
      </div>

      <!-- Add spons F9 -->
      <div>
        <h2> Add Sponsor </h2>
        <form action="addSpons.php" method="post">
          <p>Company Name <input type="text" name="CompName">
          <p>Sponsorship Level <select name="spons">
                        <option value="Platinum">Platinum</option>
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Bronze">Bronze</option>
                        </select>
          <br><br><input type="submit" value="Add Sponsor">
        </form>
      </div>


      <!-- Delete Company -->
      <div>
        <h2> Delete Sponsor </h2>
        <form action="jobsearch.php" method="post">
          <select name="companyjob">
            <?php
              $pdo= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
              $dates = "SELECT company_name FROM sponsor";
              $stmt = $pdo->query($dates);
              while($row = $stmt->fetch()){
                echo "<option value='".$row['company_name']."'>".$row['company_name']."</option>";
              }
            ?>
          </select>
          <input type="submit" value="Delete Sponsor">
        </form>
      </div>


    <br><br><br><br><br><br>
    <div id="footer"><a href="https://www.linkedin.com/in/benji-christie-065224113/" target="_blank" >web page creator </a></div>
    <div id="footer"><a href="https://www.linkedin.com/in/-michaelmackenzie/" target="_blank" >web page designer </a></div>
</body>
</html>
