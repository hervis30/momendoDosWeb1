<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda del horror</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/estilos.css">
    <script src="https://kit.fontawesome.com/8551394753.js" crossorigin="anonymous"></script>

</head>

<body>
    <header class="d-none d-md-block">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid test-white">
                <a class="navbar-brand" href="#">BabyShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="views/registroUsuario.php">registrar usuarios</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <section id="banner">
            <div>
                <h1>Bienvenidos</h1>
                <a href="" class="btn btn-info">conoce mas</a>
            </div>
        </section>
    </header>






    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-4 p-5">
                    <h1 class="fuente text-center">Bienvenido</h1>
                </div>
            </div>

            <div class="row d-flex justify-content-around mb-5">
                <div class="col-12 col-md-4">
                    <section id="cortina1">
                        <h3 class="text-white">
                            Disfruta 30% de descuento todos los jueves
                            <span><i class="fas fa-plus-circle"></i></span>
                        </h3>
                    </section>
                </div>
                <div class="col-12 col-md-4">
                    <section id="cortina3">
                        <h3 class="text-white">
                            30% de descuento en pijamas y cobijas todos los lunes
                            <span><i class="fas fa-plus-circle"></i></span>
                        </h3>
                    </section>
                </div>


                <div class="col-12 col-md-4">
                    <section id="cortina2">
                        <h3 class="text-white">
                            Descuentos en teteros y vivirones con tarjeta de credito
                            <span><i class="fas fa-plus-circle"></i></span>
                        </h3>
                    </section>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row fondo3 d-flex justify-content-between text-white">
                <div class="col-12 col-md-2 text-center">
                    <i class="fas fa-edit fa-5x text-white mb-2"></i>
                    <h4>CALIDAD</h4>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <i class="fas fa-edit fa-5x text-white mb-2 "></i>
                    <h4>SEGURIDAD</h4>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <i class="fas fa-american-sign-language-interpreting fa-5x text-white mb-2"></i>
                    <h4>CALIDAD</h4>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <i class="fas fa-dolly fa-5x text-white mb-2"></i>
                    <h4>FIABILIDAD EN ENTREGAS</h4>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8">
                    <h2 class="text-center text-muted">Conoce mas de nuestra politica de calidad</h2>
                    <img src=".//public/img/logobebe.jpg" alt="banner" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>