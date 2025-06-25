<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactalo - WebAppSecure</title>
  <link rel="stylesheet" href="stylePostulacion.css">
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

  <div class="postulacion-container">
    <h2 class="titulo">Postúlate a las Empresas</h2>

    <div class="botones-container">
      <?php
            // empresas, se deberan generar, dependiendo cuantas empresas esten registradas
            $empresas = [
            ['nombre' => 'Empresa 1', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 1234, Email: ejemplo@empresa.com'],
            ['nombre' => 'Empresa 2', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 5678, Email: ejemplo2@empresa.com'],
            ['nombre' => 'Empresa 3', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 91011, Email: ejemplo3@empresa.com'],
            ['nombre' => 'Empresa 4', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 1213, Email: ejemplo4@empresa.com'],
            ];

            foreach ($empresas as $empresa) {
            echo '<div class="empresa-boton">';
            echo '<div class="empresa-icono">';
            echo '<img src="' . $empresa['logo'] . '" alt="' . $empresa['nombre'] . '" class="icono-img">';
            echo '</div>';
            echo '<div class="empresa-nombre">';
            echo '<span>' . $empresa['nombre'] . '</span>';
            echo '</div>';
            echo '<div class="empresa-info">';
            echo '<p>' . $empresa['informacion'] . '</p>';
            echo '</div>';
            // Enlace a la página de postulación exitosa, se deberan sincronizar la informacion
            echo '<a href="../postulacionExitosa/postulacionExitosa.php?empresa=' . urlencode($empresa['nombre']) . '" class="empresa-link">Postulate</a>';
            echo '</div>';
            }
        ?>

    </div>
  </div>
</body>

    <footer class="footer">
      <div class="footer-content">
        <div class="footer-logo">
          WebAppSecure
        </div>
        <div class="footer-links">
          <a href="#">Contactos</a>
        </div>
        <div class="footer-copy">
          &copy; 2025 WebAppSecure. 
        </div>
      </div>
    </footer>

</html>
