<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item py-1 px-2 px-sm-2">
                            <a class="nav-link " aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item py-1 px-2 px-sm-2">
                            <a class="nav-link" href="sobre-mi.php">Sobre Mí</a>
                        </li>
                        <li class="nav-item py-1 px-2 px-sm-2">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item py-1 px-2 px-sm-2">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-rojo" type="submit"> <i class="fa-solid fa-file-zipper"></i> Descargar mi
                            CV </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribe aqui tu mensaje"></textarea>
                    </div>
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco">ENVIAR</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-1">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/francomunz/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:francomunz@hotmail.com">francomunz@hotmail.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp pt-2 pb-4 px-2">
        <a href="https://api.whatsapp.com/send?phone=542236193362">
            <i class="fa-brands fa-whatsapp"></i></a>

    </div>
</body>

</html>