<html>
	<head>
		<title>Smart Switch</title>
	</head>

<body>
	<?php
		$port = fopen("/dev/ttyACM0", "w+"); 
		sleep(2);
	?>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="on" />
		<input type="Submit" value="on">
	</form>

	<form action="index.php" method="POST">
		<input type="hidden" name="turn" value="off" />
		<input type="Submit" value="off">
	</form>

	<?php
		if ($_POST['turn']=="on")
		{
			echo "Turned on";
			fwrite($port, "1");
		}

		if ($_POST['turn']=="off")
		{
			echo "Turned off";
			fwrite($port, "0");
		}

		fclose($port);
	?>
</body>
</html>
