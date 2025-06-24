<?php
session_start();
if (!isset($_SESSION["nombre"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido</title>
        <link rel="stylesheet" href="styleRegistro.css">
    </head>
    <body>
    <div class="container">
        <h1>¡Bienvenido, <?= htmlspecialchars($_SESSION["nombre"]) ?>!</h1>
        <p>Has iniciado sesión como <strong><?= $_SESSION["tipo"] ?></strong>.</p>
        <a href="logout.php">Cerrar sesión</a>
    </div>
    </body>
</html>
