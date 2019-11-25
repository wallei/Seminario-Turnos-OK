<!DOCTYPE HTML>
<html>

<head>
    <title>Registro de TURNOS.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

        <head>
            <meta charset="utf-8" />
            <title> Registro de TURNO. </title>
            <div class="container">
                <h2><p>Haga su turno</p></h2>
                <form method="post">
                    <br />
                    <div class="form-group">
                        <label for="especialidad" class="col-md-3 control-label">Especialidad</label>
                        <div class="col-md-9">
                            <input type="text" name="especialidad" id="especialidad" required>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="form-group">
                        <label for="doctor" class="col-md-3 control-label">Doctor</label>
                        <div class="col-md-9">
                            <input type="text" name="doctor" id="doctor" required>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="form-group">
                        <label for="fecha" class="col-md-3 control-label">Fecha</label>
                        <div class="col-md-9">
                            <input type="date" name="fecha" id="fecha" required>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="form-group">
                        <label for="hora" class="col-md-3 control-label">Hora</label>
                        <div class="col-md-9">
                            <input type="time" name="hora" id="hora" required>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" name="boton" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button>
                        </div>
                    </div>
                </form>

            <?php

                if(isset($_POST['boton']))
                {
                     include 'conexion.php';
                    // Recibir los datos y almacenarlos en variables
                    $especialidad=$_POST["especialidad"];
                    $doctor=$_POST["doctor"];      
                    $fecha=$_POST["fecha"];
                    $hora=$_POST["hora"];            

                    // consulta para insertar
                    $insertar = "INSERT INTO pankcro.reservas (idreserva, especialidad, doctor, fecha, hora) VALUES (NULL, '$especialidad', '$doctor', '$fecha', '$hora')";

                    $verificar_reserva = mysqli_query($conn, "SELECT * FROM pankcro.reservas WHERE fecha ='$fecha'");
                    if (mysqli_num_rows($verificar_reserva) > 0){
                        //echo 'La reserva ya esta registrada';
                        Print '<script>alert("NO se logro registrar el turno! - Turno ya reservado. ");</script>';

                        exit;
                    }
                   // Ejecutar consulta
                    $resultado = mysqli_query($conn, $insertar);
                    if(!$resultado){
                         //echo 'Error al registrarse';
                        Print '<script>alert("NO se logro registrar el turno!");</script>';

                    } else{
                        //echo 'Reserva registrada exitosamente';
                         Print '<script>alert("Turno registrado exitosamente!");</script>';
                    }

                }
                mysqli_close($conn);
            ?>

        <center><a href="/index.php"><button type="button" class="btn btn-danger">Volver</button></center></a>
</body>
</html>