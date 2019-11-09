<?php
  require_once("loader.php");

  if($_POST){
    //Esto se ejecuta univcamente cuando el usuario acciona el boton de Actualizar Película  
    $pelicula = new Pelicula($_POST['title'],$_POST['rating'],$_POST['awards'],$_POST['release_date'],$_POST['length'],$_POST['genre_id']);
    $errores = $validar->ValidadorPelicula($pelicula);
    //Les recuerdo que el método de validación de errores no está completo, sería bueno que ustdes culminen la validación de todos los campos
    
    if(count($errores) == 0){
      $consulta->actualizarPelicula($bd,'movies',$pelicula,$_GET['id']);
    }
  }

  //Aquí genero el listado de los generos, para luego usarlos en el select - option del formulario y de esa forma lograr mostrar los generos para que el usuario seleccione el que desee
  $genres = $consulta->listarGeneros($bd,'genres');
  //En la variable $movie incorporo los datos de la película que el usuario desea modificar
  $movie = $consulta->detallePelicula($bd,'movies','genres',$_GET['id']);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Peliculas - Daniel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>

        <?php require 'partials/header.php' ?>
        <?php require 'partials/navbar.php' ?>
        <div class="spacer"></div>
        <h2 class="text-center">Editar Película</h2>
       <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombrePelicula">Nombre</label>
                        <input type="text" class="form-control" name="title" id="nombrePelicula" value="<?= $movie['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ratingPelicula">Rating</label>
                        <input type="number" class="form-control" name="rating" id="ratingPelicula" value="<?= $movie['rating']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input type="number" class="form-control" name="awards" id="awards" value="<?= $movie['awards']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="release-date">Release Date</label>
                        <input type="date" class="form-control" name="release_date" id="release-date" value="<?= date('Y-m-d', strtotime($movie['release_date'])); ?>">
                        <?php
                        /*info:
                        https://www.php.net/manual/es/function.date.php
                        https://www.php.net/manual/es/function.strtotime.php
                        */
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="duracionPelicula">Duración</label>
                        <input type="number" class="form-control" name="length" id="duracionPelicula" value="<?= $movie['length']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="generos">Género de la Película</label>
                        <select class="form-control" name="genre_id" id="generos">
                          <option value="<?=$movie['genre_id']; ?>"><?= $movie['name']; ?></option>
                          <?php foreach($genres as $genre): ?>
					        <?php if($genre['id']!=$movie['genre_id']): ?>
                              <option value="<?= $genre['id']; ?>"><?= $genre['name']; ?></option>
                            <?php endif; ?>
				          <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Película</button>
                </form>
                <a href="index.php" class="btn btn-danger">Volver</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7968cc1663.js" crossorigin="anonymous"></script>
    </body>
</html>
