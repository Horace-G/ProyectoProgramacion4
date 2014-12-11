<!doctype html>

<html>
<head>
	<title>Menú Principal</title>
	
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="js/date.js"></script>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5
		elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the
		page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/
		3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/
		1.4.2/respond.min.js"></script>
		<![endif]-->
	<?php
	session_start();

	$hi=$_SESSION['TIME'];
	$hi2=$_SESSION['TIME2'];
	$hi3=$_SESSION['ESJEFE'];
	if($hi==""){
	echo "<h2>hola</h2>";
	}
	echo "<script>var tiempodia='$hi';var tiempodia2='$hi2'; var jefe='$hi3'; </script>";
	?>
	<script>
		
		//alert(Date.today().getDayName());
		//alert(Date.parse(tiempodia).getDayName());
		var day1=Date.today().getDayName();
		alert(day1);
		if(Date.parse(tiempodia).getDayName()==Date.today().getDayName()){
			$("#btnAsistencia").attr('disabled', 'disabled');
			
		}
		if(Date.parse(tiempodia2).getDayName()==Date.today().getDayName()){
			$("#btnSalida").attr('disabled', 'disabled');
			
		}
	</script>
	</head>

	<script>
		$("#successAlert").hide();
		$("#warningAlert").hide();
	</script>

	<style>
	body{
background: #3A75CC;
	}
	#hi{
background: #FF9C49;	
	}
	.menu{
		width: 500px;
		height: 500px;
		margin-top:100px;
	}
	
	.alertFont{
		font-size:1.5em;
	}
	#btnSalida{
		background: #8462B2;
	}
	
	</style>

	<body>

		<div id="successAlert" class="alertFont alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">X</span></button>
			<strong>¡Éxito!</strong> La asistencia ha sido marcada.
			<a href="index.html" class="alert-link">Cerrar Sesión</a>
		</div>

		<div id="warningAlert" class="alertFont alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">X</span></button>
			<strong>¡Éxito!</strong> La salida ha sido marcada, debe
			<a href="index.html" class="alert-link"> cerrar Sesión</a>
		</div>

		<div id="hi" class="menu jumbotron container" align="center">

			<h1>Menú Principal</h1>
			<p>¿Qué desea hacer?</p>

			<div class="input-group">

				<button id="btnAsistencia" class="btn btn-primary btn-lg" >
					<span>&nbspMarcar Asistencia</span>
				</button>

			</div>

		</br>

		<div class="container">

			<div class="input-group">
				<button id="btnSalida" class="btn btn-warning btn-lg">
					<span>&nbsp&nbsp&nbsp&nbspMarcar Salida&nbsp&nbsp&nbsp</span>
				</button>
			</div>

		</br>

		<div class="input-group">
			<button id="btnReportes" class="btn btn-info btn-lg">
				<span>&nbsp&nbsp&nbsp&nbspVer Reportes&nbsp&nbsp&nbsp&nbsp</span>
			</button>
		</div>

	</br>
	
	<div class="input-group">
		<button id="btnCerrarSesion" class="btn btn-danger btn-lg">
			<span>&nbsp&nbsp&nbsp&nbspCerar Sesión&nbsp&nbsp&nbsp&nbsp</span>
		</button>
	</div>
	
</br>
<form id="marcar"></form>
<script>
if(jefe==0){
	$("#btnReportes").hide();
}
$("#successAlert").hide();
$("#warningAlert").hide();

$("#btnReportes").click(function(){
	<!--Si el empleado es jefe...-->
	window.open("reportesJefe.php");

	<!--Si no es jefe, entonces generar el php de un solo-->
});
if(tiempodia==""){

}else{
if(Date.parse(tiempodia).getDayName()==Date.today().getDayName()){
			$("#btnAsistencia").attr('disabled', 'disabled');
			
		}
	}
if(tiempodia2==""){

}else{	
	
			if(Date.parse(tiempodia2).getDayName()==Date.today().getDayName()){
				$("#btnSalida").attr('disabled', 'disabled');
				
			}
		}
		

$("#btnAsistencia").click(function(){
	<!--Ingresar codigo para conectar a base de datos y asignar asistencia al empleado aqui-->
	var url="marcar.php";
	$.ajax({type:"POST", url:url,data: $("#marcar").serialize(),
            success: function(data)
            {
                $("#resultado").html(data);
            }
         	});
	$("#successAlert").show(400);
	$("#btnAsistencia").attr('disabled', 'disabled');
});

$("#btnSalida").click(function(){
	<!--Ingresar codigo para conectar a base de datos y asignar salida al empleado aqui-->
	var url="salir.php";
	$.ajax({type:"POST", url:url,data: $("#marcar").serialize(),
            success: function(data)
            {
                $("#resultado").html(data);
            }
         	});
	$("#warningAlert").show(400);
	$("#btnAsistencia").attr('disabled', 'disabled');
	$("#btnSalida").attr('disabled', 'disabled');
	$("#btnReportes").attr('disabled', 'disabled');
	$("#btnCerrarSesion").attr('disabled', 'disabled');

});

$("#btnCerrarSesion").click(function(){
	window.open("index.html");
});

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files
	as needed -->
	<script src="js/bootstrap.min.js"></script>

</body>
</html>