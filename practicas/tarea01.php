<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de una persona</title>
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

    <div class="column is-two-fifths"></div>
        <form action="procesar2.php" method="post">
            <div>
                <label>Apellido Paterno:</label>
                <input class="input is-primary" type="text" name="apellidopaterno" required>
            </div>

            <div>
				<label>Apellido Materno:</label>
				<input class="input is-primary" type="text" name="apellidomaterno" required>
			</div>

            <div>
				<label>Nombre:</label>
				<input class="input is-primary" type="text" name="nombre" required>
			</div>

            <div>
                <label>Cargo:</label> <br>
                <input type="radio" name = "cargo" value = "Estudiante" required>Estudiante(a)
                <input type="radio" name = "cargo" value = "Otro" required>Otro(a)
                

            <div>
				<label>RFC:</label>
				<input class="input is-primary" type="text" name="rfc" required>
			</div>

            <div>
				<label>CURP:</label>
				<input class="input is-primary" type="text" name="curp" required>
			</div>

            <div>
				<label>Domicilio:</label>
				<input class="input is-primary" type="home" name="domicilio" required>
			</div>

            <div>
				<label>Teléfono:</label>
				<input class="input is-primary" type="tel" name="telefono" required>
			</div>

            <div>
				<label>Correo Electrónico:</label>
				<input class="input is-primary" type="email" name="correo" required>
			</div>

            <div>
                <label>Sexo:</label> <br>
                <input type="radio" name = "sexo" value = "Mujer" required>Mujer 
                <input type="radio" name = "sexo" value = "Hombre" requireds>Hombre 
            </div>

            <div>
                <label>Fecha de nacimiento:</label> <br>
                <input class="input is-primary" type="date" name="fechadenacimiento" 
                min="1980-01-01" max="2022-12-31" required>
            </div>

            <div>
                <label>Estado Civil:</label> <br>
                <input type="radio" name = "estadocivil" value = "soltero(a)" required>Soltero(a)
                <input type="radio" name = "estadocivil" value = "casado(a)" required>Casado(a)
                <input type="radio" name = "estadocivil" value = "viudo(a)" required>Viudo(a) 
                <input type="radio" name = "estadocivil" value = "divorciado(a)" required>Divorciado(a)
            </div>

            <div>
                <label>Escolaridad:</label> <br>
                <input type="radio" name = "escolaridad" value = "Preescolar" required>Preescolar
                <input type="radio" name = "escolaridad" value = "Primaria" requireds>Primaria 
                <input type="radio" name = "escolaridad" value = "Secundaria" required>Secundaria 
                <input type="radio" name = "escolaridad" value = "Preparatoria/Bachillerato" required>Preparatoria/Bachillerato 
                <input type="radio" name = "escolaridad" value = "Licenciatura" required>Licenciatura
                <input type="radio" name = "escolaridad" value = "Maestría" requireds>Maestría 
                <input type="radio" name = "escolaridad" value = "Doctorado" requireds>Doctorado 
            </div>
                
            <div>
                <label>Referencia familiar:</label> <br>
                <input type="radio" name = "referenciafamiliar" value = "Padre" required>Padre 
                <input type="radio" name = "referenciafamiliar" value = "Madre" required>Madre 
                <input type="radio" name = "referenciafamiliar" value = "Conyuge" required>Conyuge 
            </div>

            <div>
                <label>Observaciones:</label> <br>
                <input type="checkbox" name="observaciones" value= "Actitud Positiva" required> Actitud Positiva <br>
            </div>

            <div>
				<input class="button is-primary" type="submit" value="Enviar">
			</div>
        </form>
    </section>


    
</body>
</html>