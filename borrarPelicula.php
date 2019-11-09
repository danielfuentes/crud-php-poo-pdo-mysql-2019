<?php
//Aquí llamo al archivo que ejecuta los llamados a las clases y crea los objetos necesarios
require_once('loader.php');
//Aquí hago uso del objeto $consulta y llamo al metodo borrarPelicula, pasandoles los parámetros: base de datos ($bd), tabla sobre la cual se va a desarrollar la consulta (movies) y el id que el usuario seleccione de la lista
$consulta->borrarPelicula($bd,'movies',$_GET['id']);
//Aquí luego de borrar el registyro seleccionado, lo redirecciono al archivo index.php, el cual muestra la lista de películas
header('location:index.php');

