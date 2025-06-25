<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candidatos - WebAppSecure</title>
  <link rel="stylesheet" href="candidatos.css">
</head>
<body>

   <header>
        <nav class="navbar">
        <div class="logo">WebAppSecure</div>
        <ul class="nav-links">
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../Perfil/perfil.php">Perfil</a></li>
        <li><a href="../inicioSesion/inicio.php">Iniciar Sesion</a></li>
        <li><a href="../registroUsuarios/registro.html">Registro</a></li>
        </ul>
        </nav>
    </header>

  <div class="postulacion-container">
    <h2 class="titulo">Lista de Candidatos</h2>

    <div class="botones-container">
      <?php

        $candidatos = [
          ['nombre' => 'Candidato 1', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 1234, Email: ejemplo@candidato.com'],
          ['nombre' => 'Candidato 2', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 5678, Email: ejemplo2@candidato.com'],
          ['nombre' => 'Candidato 3', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 91011, Email: ejemplo3@candidato.com'],
          ['nombre' => 'Candidato 4', 'logo' => '../imagenes/imgPerfilUsuario.png', 'informacion' => 'Teléfono: 1213, Email: ejemplo4@candidato.com'],
        ];

        foreach ($candidatos as $candidato) {
          echo '<div class="empresa-boton">';
          echo '<div class="empresa-icono">';
          echo '<img src="' . $candidato['logo'] . '" alt="' . $candidato['nombre'] . '" class="icono-img">';
          echo '</div>';
          echo '<div class="empresa-nombre">';
          echo '<span>' . $candidato['nombre'] . '</span>';
          echo '</div>';
          echo '<div class="empresa-info">';
          echo '<p>' . $candidato['informacion'] . '</p>';
          echo '</div>';

          echo '<a href="contactado.php?candidato=' . urlencode($candidato['nombre']) . '" class="empresa-link">Contactar</a>';
          echo '</div>';
        }
      ?>
    </div>
  </div>
</body>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">WebAppSecure</div>
      <div class="footer-links">
        <a href="#">Contactos</a>
      </div>
      <div class="footer-copy">&copy; 2025 WebAppSecure.</div>
    </div>
  </footer>

</html>
