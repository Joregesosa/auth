<?php
require_once './conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
}

$query = 'SELECT * FROM usuarios WHERE correo = ?';

try {

    $stm = $pdo->prepare($query);
    $stm->execute([
        $correo
    ]);

    $result = $stm->fetch(PDO::FETCH_ASSOC);


    if (password_verify($password,  $result['password'])) {

        session_start();
        
        $_SESSION['datoUsuario'] = $result;

        header('location: ../profile.php');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
