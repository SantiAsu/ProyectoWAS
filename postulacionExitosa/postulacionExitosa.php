<?php
// Obtener el nombre de la empresa desde el parámetro GET
$empresaSeleccionada = isset($_GET['empresa']) ? $_GET['empresa'] : 'No especificada';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postulación Exitosa - WebAppSecure</title>
  <link rel="stylesheet" href="postulacionExitosa.css">
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">WebAppSecure</div>
      <ul class="nav-links">
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../Perfil/perfil.php">Perfil</a></li>
        <li><a href="../inicioSesion/inicio.php">Iniciar Sesión</a></li>
        <li><a href="../registroUsuarios/registro.html">Registro</a></li>
      </ul>
    </nav>
  </header>

  <div class="postulacion-exitosa">
    <h1>Te postulaste con éxito a la siguiente empresa:</h1>
    <h2 class="nombre-empresa"><?php echo htmlspecialchars($empresaSeleccionada); ?></h2> 

    <div class="empresa-detalle">
      <p>Información de contacto y otros detalles de la empresa se pueden agregar aquí.</p>
    </div>
  </div>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">WebAppSecure</div>
      <div class="footer-links">
        <a href="#">Contactos</a>
      </div>
      <div class="footer-copy">&copy; 2025 WebAppSecure.</div>
    </div>
  </footer>

</body>
</html>
