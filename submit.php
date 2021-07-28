<!DOCTYPE HTML>
<!--
	Grievance Redressal System By Pratik Raval
	pratikraval.tk
	gbattle.tk
	..
-->
<html>
	<head>
		<title>Submit Complaint</title>
		<link rel='shortcut icon' href='administrator/images/favicon.png' type='image/x-icon' />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

			<?php
				if ($_POST['submit']) {
					include ('administrator/connection.php');
					// $servername = "localhost";
					// $dbuser = "root";
					// $dbpass = "";
					// $database = "db_gri_red_sys"; 

					// $conn = mysqli_connect($servername, $dbuser, $dbpass);

					// if (!$conn) {
					// 	echo "Database Connection Failed.";
					// }
					// mysqli_select_db($conn, $database);

						$name = $_POST['Name'];
						$mobile_number = $_POST['MobileNumber'];
						$address = $_POST['Address'];
						$Area = $_POST['Area'];
						$desc = $_POST['Description'];
						$date = date('Y-m-d');

						$sql = "INSERT INTO `complaint`(`name`, `mobile_number`, `address`, `Area`, `complaint_desc`, `date`) VALUES ('$name', '$mobile_number', '$address', '$Area', '$desc', '$date')";

						if(mysqli_query($conn , $sql)) {
						 	echo "<h2>Your Complaint has been Successfully submited.</h2><br>";
						 	echo "We will make sure you will never face this problem again.";
						} 
					mysqli_close($conn);
					if ($_GET['lang'] == "gj") {
						echo '<script language="javascript" type="text/javascript">window.location = "guj/index.php?com_sub=yes"</script>';
					}
					else{
						echo '<script language="javascript" type="text/javascript">window.location = "index.php?com_sub=yes"</script>';
					}
				}
				else {
					echo '<script language="javascript" type="text/javascript">window.location = "index.php"</script>';
				}
				
				
			?>
		</div> <!-- wrapper ends -->

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>