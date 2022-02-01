<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
            Datos de registro de un empleado
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			

  			<?php

                $apellidopaterno = $_POST['apellidopaterno'];
                $apellidomaterno = $_POST['apellidomaterno'];
				$nombre = $_POST['nombre'];
                $cargo = $_POST['cargo'];
                $RFC = $_POST['rfc'];
                $CURP = $_POST['curp'];
                $domicilio = $_POST['domicilio'];
				$telefono = $_POST['telefono'];
                $correoelectronico = $_POST['correo'];
                $sexo = $_POST['sexo'];
                $fechadenacimiento = $_POST['fechadenacimiento'];
                $estadocivil = $_POST['estadocivil'];
                $escolaridad = $_POST['escolaridad'];
                $referenciafamiliar = $_POST['referenciafamiliar'];
                $observaciones = $_POST['observaciones'];

                echo "<h1 class='is-subtitle'>";
				echo "<br>Apellido Paterno: " . $apellidopaterno . ".";
                echo "<br>Apellido Materno: " . $apellidomaterno . "."; 
                echo "<br>Nombre: " . $nombre . ".";
                echo "<br>Cargo: " . $cargo . ".";
                echo "<br>RFC: " . $RFC . ".";
				echo "<br>CURP: " . $CURP . ".";
                echo "<br>Domicilio: " . $domicilio . ".";
				echo "<br>Teléfono: " . $telefono . ".";
                echo "<br>Correo electrónico: " . $correoelectronico . ".";
                echo "<br>Sexo: " . $sexo . ".";
                echo "<br>Fecha de nacimiento: " . $fechadenacimiento . ".";
                echo "<br>Estado Civil: " . $estadocivil . ".";
                echo "<br>Escolaridad: " . $escolaridad . ".";
                echo "<br>Referencia familiar: " . $referenciafamiliar . ".";
                echo "<br>Observaciones: " . $observaciones . ".";
				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>
