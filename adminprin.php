<!doctype html>

<html>
<head>
	
	<title>Administrador</title>
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
<body data-spy="scroll" data-target=".navbar-collapse">
	<style>
	.background{
		background-color:white;
	}
	#wrapper{
		margin-left:33%;
		margin-right:33%;
		margin-top:10%;
	}
	input{
		margin-top:20px;
	}
	select{
		margin-top:20px;
	}
	.glyphs{
		color:#01A9DB;
	}
	.glyphSize{
		font-size:142%;
	}
	.ins{
		font-size:170%;
	}
	</style>
	<div class="container">
		<div id="div1" class="contentDiv"></div>
	</div>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand">Control de Asistencia</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Control de Asistencia</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#div1">Departamentos</a></li>
					<li><a href="#div2">Empleados</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron container background">
			<h1>Gestión de Departamentos</h1>
			<p>Ingrese los datos del nuevo departamento que se incorporará a la empresa</p>
		</div>
		<div class="container">
			<form class="container col-lg-4" id="validationForm" action="admindep.php" method="post">
				<div class="input-group">
					<input class="form-control ins"type="text" placeholder="Nombre" name="name"></input>
				</div>
			</br>
			<div class="form-group">
				<button id="submitButton2" class="btn btn-success btn-lg" value="Log in">
					<span class="glyphicon glyphicon-ok"></span>&nbspAgregar
				</button>
			</br>
		</div>
	</br>
</form>
</div>
<div class="container">
	<div id="div2" class="contentDiv"></div>
</div>
<div class="jumbotron container background">
	<h1>Gestión de Empleados</h1>
	<p>Ingrese los datos del nuevo Empleado que se incorporará a la empresa</p>
</div>
<div class="container wrapper">
	<form class="container col-lg-4" id="validationForm" action="admin.php" method="post">
		<div class="input-group">
			<input class="form-control ins"type="text" placeholder="Usuario" name="user"></input>
		</div>
	</br>
	<div class="input-group">
		<input class="form-control ins"type="password" placeholder="Password" name="pass"></input>
	</div>
</br>
<div class="input-group">
	<input class="form-control ins"type="text" placeholder="Nombre" name="UserName"></input>
</div>
</br>
<div class="input-group">
	<input class="form-control ins"type="text" placeholder="Apellido" name="last_name"></input>
</div>
<br/>
<div class="input-group">
	<input class="form-control ins"type="number" placeholder="Id_Dept" name="Id_Dept"></input>
</div>
<br/>
<input class="form-control ins" type="checkbox" name="esjefe" value="1">&nbspEs Jefe</input>
</br>
</br>

<!--<div class="dropdown">
		
		
		
	<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		Dropdown
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

		<li role="presentation"><a role="menuitem" tabindex="-1">""</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1">Departamento 2</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1">Departamento 3</a></li>
	</ul>
</div>
</br>
<div class="form-group">
	<button id="submitButton" class="btn btn-success btn-lg" value="Log in">
		<span class="glyphicon glyphicon-ok"></span>&nbspAgregar
	</button>
</br>
</div>
-->
<div class="form-group">
	<button id="submitButton" class="btn btn-success btn-lg" value="Log in">
		<span class="glyphicon glyphicon-ok"></span>&nbspAgregar
	</button>
</br>
</div>
</form>
</div>
</div>
<script>
$("#submitButton").mouseenter(function(){
	$(this).animate({
		width:"170px",
	},200);
});
$("#submitButton").mouseleave(function(){
	$(this).animate({
		width:"123px",
	},200);
});
$("#submitButton2").mouseenter(function(){
	$(this).animate({
		width:"170px",
	},200);
});
$("#submitButton2").mouseleave(function(){
	$(this).animate({
		width:"123px",
	},200);
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
