<?php
session_start();
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tipo = $_POST["tipo"];
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $archivo = ($tipo === "candidato") ? "usuarios/candidatos.csv" : "usuarios/empresas.csv";

    if (file_exists($archivo)) {
        $encontrado = false;
        if (($handle = fopen($archivo, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                if ($data[1] === $email && password_verify($password, $data[2])) {
                    $_SESSION["nombre"] = $data[0];
                    $_SESSION["email"] = $data[1];
                    $_SESSION["tipo"] = $tipo;
                    fclose($handle);
                    header("Location: bienvenida.php");
                    exit;
                }
            }
            fclose($handle);
        }
        $mensaje = "Correo o contraseña incorrectos.";
    } else {
        $mensaje = "Archivo de usuarios no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Iniciar Sesión</title>
        <link rel="stylesheet" href="styleRegistro.css" />
    </head>
    <body>
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <?php if ($mensaje): ?>
        <p style="color:red;"><?= $mensaje ?></p>
        <?php endif; ?>
        <form method="POST">
        <label for="tipo">Tipo de usuario:</label>
        <select name="tipo" required>
            <option value="">Seleccione...</option>
            <option value="candidato">Candidato</option>
            <option value="empresa">Empresa</option>
        </select>
        <input type="email" name="email" placeholder="Correo electrónico" required />
        <input type="password" name="password" placeholder="Contraseña" required />
        <button type="submit">Ingresar</button>
        </form>
        <br />
        <a href="registro.html">¿No tienes cuenta? Regístrate</a>
    </div>
</body>
</html>