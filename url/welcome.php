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
	 <option value="1">Dermatologia</option>
	 <option value="2">Pediatria</option>
	 <option value="3">Cardiologia</option>
	 <option value="4">Clinica Medica</option>
	</select>

	<label for="exampleFormControlSelect1">Doctores</label>
	<select class="form-control" id="exampleFormControlSelect1">	 
	 <option value="1">Walter Gazzanego</option>
	 <option value="2">Martin Torrents</option>
	 <option value="3">Jose Viñuelas</option>
	</select>
	<div class="input-append date form_datetime">
    <input size="16" type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span>
</div>
 
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>
</div>   
</form>	
</div>	
</body>
</html>



