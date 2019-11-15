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
</head>
<body>
  <?php
    include 'session.php';
  ?>
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
  <html>
    <head>
        <meta charset="utf-8" />
        <title> Ejemplo de consulta desde PHP a MySQL </title>
<div class="container">
  <h3>Bienvenido</h3>
  <h2><p>Haga su turno</p></h2>
  <h1 align="center"> Listado de medicos</h1>
  <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>especialidad</td>
        <td>doctor</td>
        <td>fecha</td>
        <td>hora</td>
    </tr>
  <?php
            include 'session.php';
            $link = mysqli_connect("localhost:3307","root","usbw","pankcro");
            
            $result = mysqli_query($link,"SELECT * FROM pankcro.turnos");
            while($row=mysqli_fetch_array($result)){
              echo '<tr>
                      <td>'.$row["1"] .'</td>
                      <td>'.$row["2"] .'</td>
                      <td>'.$row["3"] .'</td>
                      <td>'.$row["4"] .'</td>
              </tr>';
}
            
            mysqli_close($link);
        ?>
      </table>
<form>
 <div class="form-group">
 	<label for="especialidad">Especialidad</label>
  <br />
 	<input type="text" class="form-control" name="especialidad" placeholder="Especialidad" value="<?php if(isset($especialidad)) echo $especialidad; ?>" required>
  <br />
	<label for="doctor">Doctores</label>
  <br />
 <input type="text" class="form-control" name="doctor" placeholder="Doctor" value="<?php if(isset($doctor)) echo $doctor; ?>" required>
 <br />
<label for="fecha">Fecha</label>
<br />
<input type="text" class="form-control" name="fecha" placeholder="Fecha" value="<?php if(isset($fecha)) echo $fecha; ?>" required>
<br />
<label for="hora">Hora</label>
<br />
<input type="text" class="form-control" name="hora" placeholder="Hora" value="<?php if(isset($hora)) echo $hora; ?>" required>
<br />
<br />
<button id="btn-signup" type="submit" name="boton" class="btn btn-info"><i class="icon-hand-right"></i>Reservar Turno</button> 
</div>  
</form>	
</div>
<?php
  if(isset($_POST['boton']))
    {
      include 'conexion.php';
      
      $especialidad=$_POST["especialidad"];
      $doctor=$_POST["doctor"];      
      $fecha=$_POST["fecha"];
      $hora=$_POST["hora"];         
     
     

  $inserteo = "INSERT INTO pankcro.reservas(idreserva,especialidad,doctor,fecha,hora) VALUES(NULL,'$especialidad','$doctor','$fecha','$hora') ";

  mysqli_query($conn, $inserteo);

    include'cerrarConexion.php';
    //echo "<center>SE REGISTRO CORRECTAMENTE!</center>";
    echo' ("SE RESERVO TURNO CORRECTAMENTE")';
  
  } 
?>

</body>
</html>



