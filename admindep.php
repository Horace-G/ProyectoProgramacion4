<?php
$servername = "localhost";
$username = "root";
$password = "progra4";
$db= "ControlCA";
$depnombre=$_POST["name"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Departamentos (NombreDept) VALUES ( '$depnombre')";

 if (mysqli_query($conn, $sql)) {
      

      
      echo "<script type='text/javascript'>alert('Se Ingreso Correctamente el Departamento: $depnombre');</script>";
      $conta=1;
      ?>
		<a id="but" class="btn btn-default" type ="button" href="admin.html"><img src="back.png" alt="HTML tutorial" style="width:400px;height:400px;border:0"></a>
<?php
      


  } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>