<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="public/assets/css/login.css">
    <!--link rel="stylesheet" href="styles/styles-login.css"-->
    <link rel="icon" href="" />
</head>

<body>
    <!div id="Container">
        <main>
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required minlength="3" class="txt"><br><br>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required minlength="5" class="txt"><br><br>
                <div id="Buttons">
                    <input type="submit" value="Enviar" class="btn">
                    <input type="reset" value="Limpiar" class="btn">
                </div>
            </form>
        </main>
    </!div>
</body>

</html>