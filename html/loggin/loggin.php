<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loggin.css">
    <title>Iniciar Sesión</title>    
</head>
<body>
     <?php include 'header.html'; ?>
    </div>
    <div class="login-container">
        <div class="imagen-redonda">
            <img src="logo.jpg" alt="Imagen Redonda">
        </div>
        
        <h2>Iniciar Sesión </h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>