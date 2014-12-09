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

