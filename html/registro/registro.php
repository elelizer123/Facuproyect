<!DOCTYPE html>
<html>
<head>
    <title>Registro de Información</title>
    
   
    <link rel="stylesheet" type="text/css" href="registro.css">
</head>
<body>
   
        
    <div class="login-container">
    <div class="login-container">
        <div class="imagen-redonda">
            <img src="logo.jpg" alt="Imagen Redonda">
        </div>
        <br>
        <h2>Registro de Información</h2>

        <?php
        // Procesar el formulario cuando se envía
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $fechaNacimiento = $_POST["fechaNacimiento"];
            $hotmail = $_POST["hotmail"];

            // Validar y guardar la información en un archivo (puedes utilizar una base de datos en lugar de un archivo)
            if (!empty($nombre) && !empty($apellido)  && !empty($fechaNacimiento) && !empty($hotmail)) {
                $registro = "Nombre: $nombre<br>Apellido: $apellido<br>Fecha de Nacimiento: $fechaNacimiento<br>Hotmail: $hotmail<br>";

                // Guardar la información en un archivo (puedes utilizar una base de datos)
                $archivo = fopen("registros.txt", "a");
                fwrite($archivo, $registro);
                fclose($archivo);

                echo "<p>¡Registro exitoso!</p>";
            } else {
                echo "<p>Todos los campos son obligatorios.</p>";
            }
        }
        ?>

        <h2>Ingresa tu información:</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="hotmail">Hotmail:</label>
                <input type="text" name="hotmail" required>
            </div>

            

            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fechaNacimiento" required>
            </div>

            

            <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
        </form>

        <h2>Registros anteriores:</h2>
        <?php
        // Mostrar registros anteriores desde el archivo
        if (file_exists("registros.txt")) {
            $registrosAnteriores = file_get_contents("registros.txt");
            echo $registrosAnteriores;
        }
        ?>
    </div>
</body>
</html>
