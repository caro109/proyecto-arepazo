<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body class="body_seccion">
    <div class="container-all iniciar_sesion_todo">
        
            <div class="iniciar_sesion_imagen">
                <img class="imagen" src="imgs/sinfondo.jpeg" alt="">
            </div>

        <div class="ctn-form iniciar_sesion_texto">
            <h1 class=""> Iniciar Sesión </h1>
            <form class="iniciar_sesion_formulario" action="validar.php" method="POST">
                <label class="ul">Usuario:</label>
                <input class="Usuario" type="text" name="nombre_usuario">

                <label for=" " class="lc">Contraseña:</label>
                <input class="Contraseña" type="password" name="contraseña">

                <input class="Iniciar btn-inicio" type="submit" value="Ingresar">
                <a href="index.html "></a>
            </form>
        </div>
    </div>
</body>

</html>