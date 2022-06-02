<!DOCTYPE html>
<html lang="en" style="text-align: center;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login to Data Analytics</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <h1>Login</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-signin">
    Username: <input type="text" id="user" name="user"><br>
    Password: <input type="password" id="pass" name="pass" style="margin-left: 5px;"><br>
    <button class="btn btn-primary" type="submit" name="submit" id="submit">Login</button>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    </form>
    <?php
    if(isset($_POST['submit'])){
		// Get form data
		$User = $_POST['user'];
		$Pass = $_POST['pass'];

        if($User == 'admin' && $Pass == 'admin'){
            header("Location: DataAnalytics.php");
            exit();
        }
        else{
            $errorMessage = 'Error \n Wrong login credentials';
            echo "<script>alert(\"$errorMessage\"); window.location.href='loginToDataAnalytics.php';</script>";
          }
   
	}
    ?>
</body>

</html>