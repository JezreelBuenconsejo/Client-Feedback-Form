<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>createDB</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form method="POST" id="createDB" action="<?php $_SERVER['PHP_SELF']; ?>">
    <strong>Server Name:&nbsp;</strong><input type="text" id="servername" name="servername" style="margin-left: 42px;" required><br>
    <strong>Username</strong><input type="text" id="username" name="username" style="margin-left: 73px;" required><br>
    <strong>Password:&nbsp;</strong><input type="text" id="password" name="password" style="margin-left: 68px;"><br>
    <strong>Name of Database:&nbsp;</strong><text id="database" name="database" value="feedbackform">feedbackform</text><br>
    <button class="btn btn-primary" type="submit" name="submit" value="submit">Create DB</button>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    </form>
    
    <?php
    if(isset($_POST['submit'])){
$servername = $_POST["servername"];
$username = $_POST["username"];
$password = $_POST["password"];


// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE feedbackform";
if (mysqli_query($conn, $sql)) {
  echo '<script>alert("success Creating Database")</script>';
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


//create TABLE

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, "feedbackform");
// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE TABLE `feedbackform`.`userinfo` ( `userID` INT(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `gender` VARCHAR(255) NOT NULL , `officeVisited` VARCHAR(255) NOT NULL , `frontdeskOfficer` VARCHAR(255) NOT NULL , `dateServed` DATE NOT NULL , `campus` VARCHAR(255) NOT NULL , `clientType` VARCHAR(255) NOT NULL , `logdt` DATETIME NOT NULL , PRIMARY KEY (`userID`)) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql)) {
  echo 'Sucess Creating userinfo Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql2 = "CREATE TABLE `feedbackform`.`services` ( `servicesID` INT(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `completeness` VARCHAR(255) NOT NULL , `accuracy` VARCHAR(255) NOT NULL , `speed` VARCHAR(255) NOT NULL , `SCovid19` VARCHAR(255) NOT NULL , `logdt` DATETIME NOT NULL , PRIMARY KEY (`servicesID`)) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql2)) {
  echo 'Sucess Creating services Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql3 = "CREATE TABLE `feedbackform`.`personnel` ( `personnelID` INT(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `knowledge` VARCHAR(255) NOT NULL , `attitude` VARCHAR(255) NOT NULL , `grooming` VARCHAR(255) NOT NULL , `PCOVID19` VARCHAR(255) NOT NULL , `logdt` DATETIME NOT NULL , PRIMARY KEY (`personnelID`)) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql3)) {
  echo 'Sucess Creating personnel Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql4 = "CREATE TABLE `feedbackform`.`office` ( `officeID` INT(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `location` VARCHAR(255) NOT NULL , `workSpace` VARCHAR(255) NOT NULL , `cleanliness` VARCHAR(255) NOT NULL , `equipmentAndFurnishing` VARCHAR(255) NOT NULL , `OCOVID19` VARCHAR(255) NOT NULL , `logdt` DATETIME NOT NULL , PRIMARY KEY (`officeID`)) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql4)) {
  echo 'Sucess Creating Office Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql5 = "CREATE TABLE `feedbackform`.`overall` ( `overallID` INT(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `overall` VARCHAR(255) NOT NULL , `comments` VARCHAR(255) NOT NULL , `logdt` DATETIME NOT NULL , PRIMARY KEY (`overallID`)) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql5)) {
  echo 'Sucess Creating Overall Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql6 = "CREATE TABLE `feedbackform`.`frontdeskOfficer` ( `frontdeskOfficerID` INT(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT , `Name` VARCHAR(255) NOT NULL, `username` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL,PRIMARY KEY (`frontdeskOfficerID`)) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql6)) {
  echo 'Sucess Creating Frontdesk Officer Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql7 = "CREATE TABLE `feedbackform`.`superadmin` (`Name` VARCHAR(255) NOT NULL, `username` VARCHAR(255) NOT NULL, `password` VARCHAR(255) NOT NULL) ENGINE = InnoDB;";
if (mysqli_query($conn1, $sql7)) {
  echo 'Sucess Creating Frontdesk Officer Table <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

$sql8 = "INSERT INTO `superadmin` (`Name`,`username`,`password`) VALUES ('Administrator','superadmin','superadmin')";
if (mysqli_query($conn1, $sql8)) {
  echo 'Sucess adding superadmin [PASSWORD: superadmin] <br>';
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}

mysqli_close($conn1);
}
?>
</body>

</html>