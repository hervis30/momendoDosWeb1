<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registroUsuario</title>
    <link rel="stylesheet" href="../public/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="fondo">

    <main>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <form action="../controllers/empleadosControlador.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombre" placeholder="ingrese nombres">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellido" placeholder="ingrese apellidos">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="ingrese email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad" placeholder="ingrese edad">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripcion</label>
                            <textarea class="form-control" name="descripcion" placeholder="ingrese descripcion">
                        </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fotografia</label>
                            <input type="text" class="form-control" name="foto" placeholder="ingrese fotografia">
                        </div>
                        <button type="submit" name="boton" class="btn btn-danger">Registrar</button>
                    </form>
                    <div class="col-12 col-md aling-self-end"><img src="../public/img/manchester.png" alt="imagen" class="w-100 img-fluid"></div>
                </div>
            </div>
        </div>
    </main>

    <section>
        <?php  ?>
        <div class="modal fade" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">la tienda del horror</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>PRUEBA</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php ?>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>