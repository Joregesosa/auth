<?php

 
                 
session_start();

if (isset($_SESSION['datoUsuario'])) {
    $datoUsuario = $_SESSION['datoUsuario'];

    $dataImg = base64_encode($datoUsuario["foto"]);
     
}else{
    // si no existe ninguna session redireccionar al login
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Welcome</h1><br>
    
    <?php echo "<img src='data:image/png;base64,$dataImg' height='200' />"?>

    <a href="./scripts/logout.php">Cerrar Session</a>
</body>

</html>