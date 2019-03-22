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
        <div id="bar">
            <ul>
                <li class="navbar"><a href="#">Home</a></li>
                <li class="navbar"><a href="#">Pictures</a></li>
                <li class="navbar"><a href="#">My Bio</a></li>
                <li class="navbar"><a href="#">My Company</a></li>
                <li class="navbar"><a href="#">Portfolio</a></li>
                <li class="navbar"><a href="#">Contact</a></li>
            </ul>
      </div>
        <div class="contentTitle"><h1>Conference Stuff</h1></div>
        <div class="contentText">Each title is an H1 tag, so choose them carefully :)</div>
      </div>
        <div id="footer"><a href="https://www.linkedin.com/in/benji-christie-065224113/">web page designer </a></div>
        <form action="myfirstphp.php" method="post"><p>First name:<p><input type="text" name="firstname"><br>
          <p>Last name: <p><input type="text" name="lastname"><input type="submit">
        </form>
      <div>
        <h2> Subcommittee Members </h2>
          <?php
            $dbh= new PDO('mysql:host=localhost;dbname=ProjectP2', "root", "");
            $rows = $dbh->query("SELECT committee_name FROM sub_Committee");
            $rows->setFetchMode(PDO::FETCH_ASSOC);
            while ($SC = $rows->fetch()): {
              echo "$SC[committee_name]";
            }

          ?>
      </div>
</body>
</html>
