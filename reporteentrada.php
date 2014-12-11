<style>
table {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}tr:hover td{
	
}
tr:nth-child(odd){ background-color:#ffc9c9; }
tr:nth-child(even)    { background-color:#ffffff; }.table td{
	vertical-align:middle;
	
	
	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:center;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}tr:last-child td{
	border-width:0px 1px 0px 0px;
}tr td:last-child{
	border-width:0px 0px 1px 0px;
}tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
tr:first-child td{
		background:-o-linear-gradient(bottom, #ff0000 5%, #bf0000 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff0000), color-stop(1, #bf0000) );
	background:-moz-linear-gradient( center top, #ff0000 5%, #bf0000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff0000", endColorstr="#bf0000");	background: -o-linear-gradient(top,#ff0000,bf0000);

	background-color:#ff0000;
	border:0px solid #ffffff;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff0000 5%, #bf0000 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff0000), color-stop(1, #bf0000) );
	background:-moz-linear-gradient( center top, #ff0000 5%, #bf0000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff0000", endColorstr="#bf0000");	background: -o-linear-gradient(top,#ff0000,bf0000);

	background-color:#ff0000;
}
tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
</style>
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
session_start();
$id=$_SESSION["DEPT"];

$sql="SELECT * FROM Usuarios U join Asistencia a on a.idUsuarios =U.idUsuarios WHERE EnSal='E' and IdDept='$id'";
if($result = mysqli_query($conn,$sql)){
	?>
        <a id="but" class="btn btn-default" type ="button" href="reportesJefe.php"><img src="back.png" alt="HTML tutorial" style="width:100px;height:100px;border:0"></a>
<?php
	echo "<table><tr><td id='Primer'>"."idUsuarios"."</td><td id='Segundo'>"."Nombre"."</td><td id='Tercer'>"."Entrada o Salida"."</td><td id='Cuarto'>"."Time"."</td></tr>";
    	while($row=mysqli_fetch_assoc($result)){
    		echo "<tr><td id='Primer'>".$row['idUsuarios']."</td><td id='Segundo'>".$row['Nombre']."</td><td id='Tercer'>".$row['EnSal']."</td><td id='Cuarto'>".$row['Time']."</td></tr>";
    	}echo "</table>";
            
               
             
        
}else{
    die('There was an error running the query [' . $conn->error . ']');
    
}

?>