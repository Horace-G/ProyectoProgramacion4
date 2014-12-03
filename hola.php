<?php
$servername = "localhost";
$username = "root";
$password = "123second";
$db= "ControlCA";
$usuario=$_POST["user"];
$contra=$_POST["pass"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

if($result = mysqli_query($conn, "SELECT Password,UserName FROM Usuarios")){
    
        while($row = $result->fetch_row()){
            
            if($usuario==$row[1]){
                if($contra==$row[0]){
                    header( 'Location: ./admin.html' ) ;
                }else{
                    echo "Contrasena Incorrecta";
                }
            }
            
        }
}else{
    die('There was an error running the query [' . $conn->error . ']');
    
}

?>
