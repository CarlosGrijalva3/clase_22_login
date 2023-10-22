<!--Registro-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_registro.css">
    <title>Hash</title>
</head>
<body>
    <form action="controlador.php" method="post" autocomplete="off">
        <h1>Registro</h1>

        <label for="usuario_usu">Usuario</label>
        <input type="text" name="usuario_usu" id="usuario_usu">

        <label for="password_usu">Contraseña</label>
        <input type="password" name="password_usu" id="password_usu">

        <button type="submit" name="registro">Registro</button>
    </form>
</body>
</html>
