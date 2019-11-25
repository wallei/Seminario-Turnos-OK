

<html>
	<head>
		<title>Registro</title>
		
		<link rel="stylesheet" href="/css/bootstrap.min.css" >
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css" >
		<script src="/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Reg&iacute;strate</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>

							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Apellido:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php if(isset($apellido)) echo $nombre; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>


							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="clave" placeholder="clave" required>
								</div>
							</div>
							
						
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" name="boton" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
									<a href="/index.php"><button type="button" class="btn btn-danger">Volver</button></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


<?php

    if(isset($_POST['boton']))
    {
      include 'conexion.php';
      
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];      
      $usuario=$_POST["usuario"];
      $email=$_POST["email"];
      $clave=$_POST["clave"];            
     
     

 	$inserteo = "INSERT INTO pankcro.usuarios (idUsuario,nombre, apellido, usuario, email, clave) VALUES (NULL, '$nombre', '$apellido', '$usuario', '$email', '$clave')";

 	mysqli_query($conn, $inserteo);

    include'cerrarConexion.php';
    //echo "<center>SE REGISTRO CORRECTAMENTE!</center>";
    Print '<script>alert("SE REGISTRO CORRECTAMENTE!");</script>';
	
	} 

?>













	</body>
</html>													