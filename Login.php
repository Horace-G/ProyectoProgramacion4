<?php
$servername = "localhost";
$username = "root";
$password = "progra4";
$db= "ControlCA";
$usuario=$_POST["user"];
$contra=$_POST["pass"];
$adminuse="adminCH";
$admincon="adminCH";
$iduser;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$sql ="select * from Usuarios u Join Asistencia a on u.idUsuarios=a.idUsuarios where a.EnSal='E' and u.Username='$usuario' order By a.Time Desc limit 1";
$sql2 ="select * from Usuarios u Join Asistencia a on u.idUsuarios=a.idUsuarios where a.EnSal='S' and u.Username='$usuario' order By a.Time Desc limit 1";
if($result = mysqli_query($conn, "SELECT * FROM Usuarios WHERE Username = '$usuario'")){
    
        $row=mysqli_fetch_assoc($result);
            
            if($adminuse==$usuario){
            	if($admincon==$contra){
            		header( 'Location: admin.html' ) ;
            	}
            }else{
            if($contra==$row["Password"]){
                session_start();
                $_SESSION['IDUSER']=$row["idUsuarios"];
                $_SESSION['ESJEFE']=$row["EsJefe"];
                $_SESSION['ENSAL']=$row["EnSal"];
                $_SESSION['DEPT']=$row["IdDept"];
                echo $_SESSION['DEPT'];
                 if($result1 = mysqli_query($conn, $sql)){
                    $rpp=mysqli_fetch_assoc($result1);
                    $_SESSION['TIME']=$rpp["Time"];
                     echo $_SESSION['TIME'];
                }else{
                    echo "vamos mal";
                }
                if($result2 = mysqli_query($conn, $sql2)){
                    $rpp2=mysqli_fetch_assoc($result2);
                    $_SESSION['TIME2']=$rpp2["Time"];
                     echo $_SESSION['TIME2'];
                }else{
                    echo "vamos mal";
                }
            	header('Location: menu.php');
                
                
            }else{
               
                echo "<script type='text/javascript'>alert('Contrasena Mala');</script>";
      $conta=1;
      ?>
        <a id="but" class="btn btn-default" type ="button" href="index.html"><img src="back.png" alt="HTML tutorial" style="width:400px;height:400px;border:0"></a>
<?php
            }
        }
            
        
}else{
    die('There was an error running the query [' . $conn->error . ']');
    
}

?>

