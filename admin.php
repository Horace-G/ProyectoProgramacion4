<?php
$servername = "localhost";
$username = "root";
$password = "progra4";
$db = "ControlCA";
$NombreUsuario=$_POST["user"];
$ClaveUsuario=$_POST["pass"];
$ApellidoUsuario=$_POST["last_name"];
$Nombre=$_POST["UserName"];
$Id_Dept=$_POST["Id_Dept"];
$esjefe=$_POST["esjefe"];
	$conn = mysqli_connect($servername, $username, $password, $db);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  if($esjefe==1){
  $sql = "INSERT INTO Usuarios (UserName,Password,Nombre,Apellido,EsJefe,IdDept) VALUES ('$NombreUsuario','$ClaveUsuario','$Nombre','$ApellidoUsuario','$esjefe','$Id_Dept')";
  }else{
  $sql = "INSERT INTO Usuarios (UserName,Password,Nombre,Apellido,EsJefe,IdDept) VALUES ('$NombreUsuario','$ClaveUsuario','$Nombre','$ApellidoUsuario',0,'$Id_Dept')";
  }
  if (mysqli_query($conn, $sql)) {
     echo "<script type='text/javascript'>alert('Se Ingreso Correctamente el Usuario: $Nombre');</script>";
      $conta=1;
      ?>
    <a id="but" class="btn btn-default" type ="button" href="admin.html"><img src="back.png" alt="HTML tutorial" style="width:400px;height:400px;border:0"></a>
<?php
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

?>