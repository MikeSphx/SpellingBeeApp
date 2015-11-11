<?php
	
	session_start();
	
	/*
	define(DB_HOST, "cis-linux2.temple.edu");
	define(DB_USER, "tug28347");
	define(DB_PASSWORD, "aelegumo");
	define(DB_DATABASE, "SU15_NSFRU_tug28347");
	
	echo "<script type='text/javascript'>alert('Here');</script>";
	
	if (isset($_GET['Acode'])) {
		$NewAcode=$_GET['Acode'];
		$NewEmail=$_GET['Email'];
		$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
			echo "<script type='text/javascript'>alert('Here2');</script>";
		}
		$result = mysqli_query = ($con, "SELECT * FROM SU15_NSFRU_tug28347.SpellingBeeUsers WHERE Acode='$NewAcode' AND Email='$NewEmail'");
		$count = mysqli_num_rows($result);
		echo "<script type='text/javascript'>alert('Here3');</script>";
		if ($count > 0) {
			$row = mysqli_fetch_array($result);
			$_SESSION['ID'] = $row['ID'];
			$_SESSION['Email'] = $row['Email'];
			$code = rand();
			$result = mysqli_query($con, "UPDATE FROM SU15_NSFRU_tug28347.SpellingBeeUsers SET Status=1, Acode='$code'");
			echo "<script type='text/javascript'>alert('Registration successful');</script>";
			header("location:../www/login.php");
		}
	}
	*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title></title>

    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	

    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
    <link href="css/ionic.app.css" rel="stylesheet">
    -->

    <!-- ionic/angularjs js -->
    <script src="lib/ionic/js/ionic.bundle.js"></script>

    <!-- cordova script (this will be a 404 during development) -->
    

    <!-- your app's js -->
    <script src="js/app.js"></script>
	<script src="js/jquery-git.js"</script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/responsivevoice.js"></script>
	<script src="js/Lab6.js"></script>
	
  </head>
  <body ng-app="starter">

	<div id="page2">
		<ion-pane>
			<ion-header-bar class="bar-stable bar-energized" align-title="center">
				<h1 class="title">Logout</h1>
		    </ion-header-bar>
			<ion-content>
			
			<div class="padding">
					<a class="button button-block button-dark" href="index.php">
						Logout successful! Go back
					</a>
			</div>
			</ion-content>
		</ion-pane>
	</div>
	
  </body>
</html>