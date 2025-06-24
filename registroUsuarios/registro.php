<?php
if (!file_exists("usuarios")) {
    mkdir("usuarios", 0777, true);
}

if (isset($_POST["tipo"]) && isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $tipo = $_POST["tipo"];
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);

    if ($tipo === "candidato") {
        $ocupacion = isset($_POST["ocupacion"]) ? trim($_POST["ocupacion"]) : "";
        $archivo = fopen("usuarios/candidatos.csv", "a");
        fputcsv($archivo, [$nombre, $email, $password, $ocupacion]);
        fclose($archivo);
        $mensaje = "Registro de candidato exitoso.";
    } elseif ($tipo === "empresa") {
        $giro = isset($_POST["giro"]) ? trim($_POST["giro"]) : "";
        $rfc = isset($_POST["rfc"]) ? trim($_POST["rfc"]) : "";
        $archivo = fopen("usuarios/empresas.csv", "a");
        fputcsv($archivo, [$nombre, $email, $password, $giro, $rfc]);
        fclose($archivo);
        $mensaje = "Registro de empresa exitoso.";
    } else {
        $mensaje = "Tipo de usuario no válido.";
    }
} else {
    $mensaje = "Faltan datos obligatorios.";
}

echo "<h2>$mensaje</h2>";
echo '<a href="registro.html">← Volver al registro</a>';
?>