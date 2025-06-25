<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Mensajes</title>
  <link rel="stylesheet" href="mensajesUS.css">
</head>
<body>

  <div class="container">
    <h1>Mensajes Recibidos</h1>
    <?php if (count($mensajes) > 0): ?>
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>Remitente</th>
          <th>Mensaje</th>
          <th>Fecha</th>
        </tr>
        <?php foreach ($mensajes as $mensaje): ?>
        <tr>
          <td><?= htmlspecialchars($mensaje['remitente']) ?></td>
          <td><?= htmlspecialchars($mensaje['contenido']) ?></td>
          <td><?= htmlspecialchars($mensaje['fecha']) ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    <?php else: ?>
      <p>No has recibido mensajes.</p>
    <?php endif; ?>
  </div>
</body>
</html>