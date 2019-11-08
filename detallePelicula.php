<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $pelicula['title']?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php require 'partials/navbar.php' ?>
    <div class="spacer"></div>
    <h2 class="text-center">Detalle de la Película!!!</h2>
    <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
            <div class="card w-100">
                <img class="card-img-top" src="images/logo.jpg" alt="Foto de la pelicula">
                <div class="card-body">
                    <h5 class="card-title text-center"></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi minima nemo expedita distinctio ipsa eum magnam fugiat! Aspernatur, illo.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">Título: </li>
                    <li class="list-group-item ">Calificación: </li>
                    <li class="list-group-item">Premios: </li>
                    <li class="list-group-item">Fecha de creación: <?= date('d-m-Y',strtotime($pelicula['release_date'])); ?></li>
                    <li class="list-group-item">Duracion: <</li>
                    <li class="list-group-item">Genero: </li>
                </ul>
                
            </div>
            <a href="index.php" class="btn btn-danger">Volver</a>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7968cc1663.js" crossorigin="anonymous"></script>
</body>
</html>
