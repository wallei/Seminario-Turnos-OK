<?php
include'session.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Página de Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sis. Registro Turno Medico</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $login_session; ?></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Bienvenido</h3>
  <h2><p>Haga su turno</p></h2>
<form>
 <div class="form-group">
 	<label for="exampleFormControlSelect1">Especialidad</label>
 	<select class="form-control" id="exampleFormControlSelect1">
	 <option value="1">Clinica Medica</option>
	 <option value="2">Dermatologia</option>
	 <option value="3">Cardiologia</option>
	</select>

	<label for="exampleFormControlSelect1">Doctores</label>
	<select class="form-control" id="exampleFormControlSelect1">	 
	 <option value="1">Dr. Nick Riviera</option>
	 <option value="2">Dr. Zoidberg</option>
	 <option value="3">Dr. Hibbert</option>
	</select>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<label for="exampleFormControlSelect1">Fecha</label>
<br />
<input type="text" id="datepicker">
<br />
<label for="exampleFormControlSelect1">Hora</label>
<br />
<input type="text" class="timepicker">
<br />
<br />
<input type="submit">
</div>   
</form>	
</div>	
</body>
</head>
</html>



