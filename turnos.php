<!DOCTYPE html>
<html>
	<head>
		<title> -Seminario Lenguaje - S.R.T.M - </title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="css/estilos-img.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3>Turnos</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="100">idTurno</th>
								<th width="250">Especialidad</th>
								<th width="250">Doctor</th>
								<th width="250">Fecha</th>
								<th width="250">Hora</th>
							</tr>
						</thead>
					<?php
               
                		// Create connection
                		$link = mysqli_connect("localhost:3307","root","usbw","pankcro");
  
               
                		$result = mysqli_query($link,"SELECT * FROM pankcro.reservas");
                   		while($row=mysqli_fetch_array($result)){
                   			echo'
                   			<tr>
                   		 		<td>'.$row[0].'</td>
                   		 		<td>'.$row[1].'</td>
                   		 		<td>'.$row[2].'</td>
                   		 		<td>'.$row[3].'</td>
                   		 		<td>'.$row[4].'</td>
                   			</tr>
                   			';                   		
                   		}
               
                		mysqli_close($link);
            		?>
            </table>
            	</div>
        	</div>
          <br>
        	<center><a href="/index.php"><button type="button" class="btn btn-danger">Volver</button></a></center>
		</div>
	</body>
</html>