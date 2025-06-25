<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mensajería y Candidatos</title>
  <link rel="stylesheet" href="mensajesUS.css">
</head>
<body>
  <div class="container">
    <h1>Candidatos Registrados</h1>
    <?php if (isset($mensajeEnviado) && $mensajeEnviado): ?>
      <p style="color: green;">Mensaje enviado correctamente.</p>
    <?php endif; ?>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Ocupación</th>
        <th>Acciones</th>
      </tr>
      <?php foreach ($candidatos as $candidato): ?>
      <tr>
        <td><?= htmlspecialchars($candidato['nombre']) ?></td>
        <td><?= htmlspecialchars($candidato['email']) ?></td>
        <td><?= htmlspecialchars($candidato['ocupacion']) ?></td>
        <td>
          <form method="post" action="">
            <input type="hidden" name="destinatario" value="<?= $candidato['email'] ?>">
            <textarea name="mensaje" placeholder="Escribe tu mensaje" required rows="3" cols="30"></textarea><br>
            <button type="submit">Enviar Mensaje</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>