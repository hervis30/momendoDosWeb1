<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registroProducto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <body class="fondo">

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <form action="../controllers/productosControlador.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Nombre Producto</label>
                                <input type="text" class="form-control" name="nombreProducto" placeholder="ingrese nombre del producto">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">marca</label>
                                <input type="text" class="form-control" name="marca" placeholder="ingrese marca">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" placeholder="ingrese precio">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descripcion Producto</label>
                                <textarea class="form-control" name="descripcionProducto" placeholder="ingrese descripcion del producto">
                                </textarea>
                            </div>

                            <button type="submit" name="botonProducto" class="btn btn-danger">Registrar Producto</button>
                        </form>
                        <div class="col-12 col-md aling-self-end"><img src="../public/img/manchester.png" alt="imagen" class="w-100 img-fluid"></div>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>