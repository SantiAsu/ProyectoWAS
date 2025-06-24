<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Iniciar Sesión - WAS</title>
    <link rel="stylesheet" href="styleInicio.css" />
</head>
<body>
    <div class="registro-wrapper">

        <div class="registro-right">
            <div class="form-box">
                <h2>Bienvenido de vuelta</h2>
                <p class="subtitulo">Por favor ingrese sus datos</p>
                
                <form class="form-registro" action="login.php" method="POST" autocomplete="off">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="ejemplo@ejemplo.com">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Tu contraseña">

                    <button type="submit" class="btn-registro">Ingresar</button>
                </form>
            </div>
        </div>
        
        <div class="registro-left">
        </div>
    </div>
</body>
</html>
