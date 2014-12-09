<?php

session_start();

	$servername = "localhost";
	$username = "root";
	$password = "progra4";
	$db= "ControlCA";



	$conn = mysqli_connect($servername, $username, $password, $db);



	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$use=$_SESSION['IDUSER'];
	$sql = "INSERT INTO Asistencia (idUsuarios,EnSal) VALUES ( '$use','E')";

	if (mysqli_query($conn, $sql)) {
			echo true;
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>