<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
</head>
<body>
    <form action="./scripts/register.php" method="POST" enctype="multipart/form-data">

        <input type="correo" name="correo" id="correo" required><br><br>
        <input type="password" name="password" id="password" required><br><br>
        <input type="file" name="foto" id="foto" required><br><br>

            <button type="submit">Enviar</button>
    </form>
</body>
</html>