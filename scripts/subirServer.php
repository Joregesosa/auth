<?php

require_once './conn.php';
session_start();
$user_id = $_SESSION['datoUsuario']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $baseurl = '../upload/';

    $tmp = $_FILES['foto']['tmp_name'];

    $baseName = basename($_FILES['foto']['name']);

    $ext = pathinfo($baseName, PATHINFO_EXTENSION);

    $imgName = "profile$user_id." . $ext;

    move_uploaded_file($tmp, $baseurl . $imgName);
}

$query = 'UPDATE usuarios SET `foto`= ? where id = ?';
try {
    $stm = $pdo->prepare($query);
    $rs = $stm->execute([
        $imgName,
        $user_id
    ]);

    $sql = "SELECT * FROM usuarios WHERE `id`= ?";
    $stm1 = $pdo->prepare($sql);
    $stm1->execute(
        [$user_id]
    );
    $rs = $stm1->fetch(PDO::FETCH_ASSOC);

    $_SESSION['datoUsuario'] = $rs;

    header('location: ../profile.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
