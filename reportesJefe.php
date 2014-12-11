<!doctype html>
<html>
	<head>
		<title>Reportes</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script type="text/javascript" src="jquery.min.js"></script>

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

</head>

<style>
	.background{
		background-color:white;
	}
	
	.jumbotron{
		background-color:white;
	}
	#hs{
		background: #39A0E8;
		
		margin: auto;
		
	}
	#fechaDiv{
		background: #39A0E8;
		width: 400px;
	}
	#tipoDiv{
		background: #39A0E8;
		width: 400px;
	}
	#empleadoDiv
	{
		background: #39A0E8;
		width: 400px;
	}
	body{
		background: #02CDFF;
	}
	#hi{

		background: #02CDFF;
	}
	#btnVolver{
		margin: right;
	}
	
</style>

<body>

	<div class="navbar navbar-default navbar-fixed-top" id ="hi">
		<div class="container horizontal">
			<div class="navbar-header">
				<a href="" class="navbar-brand">Generar Reporte ...</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Control de Asistencia</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
			
			<div class="col-lg-4">
			<form>
				<ul class="nav navbar-nav" align="right">
					<li class="active col-lg-2"><input id="fecha" class="form-control" type="radio" name="tipoReporte" value="fecha"/><h5>Por Fecha</h5></li>
					<li class="active col-lg-2"><input id="tipo" class="form-control" type="radio" name="tipoReporte" value="tipo"/><h5>Por Tipo</h5></li>
					<li class="active col-lg-2"><input id="empleado" class="form-control" type="radio" name="tipoReporte" value="empleado"/><h5>Por Empleado</h5></li>
				</ul>
			</div>
			
			<div class="col-lg-4" align="center">
				<button id="btnVolver" class="btn btn-warning btn-lg">Volver</button>
			</div>
			
			</div>
		</div>
	</div>

	</br></br></br>

	

	<div class="horizontal" id="hs">
		<div id="fechaDiv" class="container jumbotron">
			<h1>Por fecha</h1>
			
			<form>
			
				<div class="form-group">
					<input id="ascen" class="form-control" type="radio" name="dateSort" value="ascendente"/><h3>Orden ascendente</h3>
				</div>
			
				<div class="form-group">
					<input id ="desc" class="form-control"type="radio" name="dateSort" value="descendente"/><h3>Orden descendente</h3>
				</div>			
		
				</br></br>
		
				<button id="generar" type="button" class="btn btn-lg btn-success">
					<span>Generar Reporte</span>
				</button>
		
			<form>
		
		</div>
		
		<div id="tipoDiv" class="container jumbotron">
			<h1>Por Tipo</h1>
			
			<form>
			
				<div class="form-group">
					<input id="entradas" class="form-control" type="radio" name="checkType" value="entrada"/><h3>Por Entradas</h3>
				</div>
			
				<div class="form-group">
					<input class="form-control"type="radio" name="checkType" value="salida"/><h3>Por Salidas</h3>
				</div>			
		
				<button id = "generars"type="button" class="btn btn-lg btn-success">
					<span>Generar Reporte</span>
				</button>
		
			</form>
		
		</div>
			
		
		<div id="empleadoDiv" class="jumbotron container">
			<h1>Por Empleado</h1>
			
		<form id="validationForm" action="generarempleados.php" method="post">
			<div class="input-group">
				<input id = "USER"type="text" class="form-control" name="USER" placeholder="Usuario"></input>
			</div>
			
			</br></br>
			
			
			<button id="generare"type="submit" class="btn btn-lg btn-success">
					<span>Generar Reporte</span>
			</button>
		
		</form>
			
		</div>
		
	</div>
	<script>
		$("#ascen").attr('checked',true);
		$("#entradas").attr('checked',true);
		$("#fecha").attr('checked',true);
		
		
		
		$("#fechaDiv").show();
		$("#tipoDiv").hide();
		$("#empleadoDiv").hide();
		$("#generar").click(function(){
			if($('#ascen').is(':checked')) {
			 	window.location.replace("SelectAscen.php");
			}else{
				window.location.replace("SelectDesc.php");
			}
			
				
			
		});
		$("#generars").click(function(){
			if($('#entradas').is(':checked')) {
			 	window.location.replace("reporteentrada.php");
			}else{
				window.location.replace("reportesalida.php");
			}
			
				
			
		});
		$("#generare").click(function(){
					
			var url="validar.php";
			$.ajax({type:"POST", url:url,data: $("#empli").serialize(),
            success: function(data)
            {
                $("#resultado").html(data);
            }
         	});
			window.location.replace("generarempleados.php");
				
			
		});
		$("#fecha").click(function(){
			$("#fechaDiv").show();
			$("#tipoDiv").hide();
			$("#empleadoDiv").hide();
		});
		
		$("#tipo").click(function(){
			$("#tipoDiv").show();
			$("#fechaDiv").hide();
			$("#empleadoDiv").hide();
		});
		
		$("#empleado").click(function(){
			$("#empleadoDiv").show();
			$("#fechaDiv").hide();
			$("#tipoDiv").hide();
		});
		
		$("#btnVolver").click(function(){
			window.open("menu.php");
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
