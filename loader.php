<?php
require_once('clases/basemysql.php');
require_once('clases/Consulta.php');
require_once('clases/Pelicula.php');
require_once('clases/ValidarPelicula.php');
$bd = BaseMysql::conexion();
$consulta = new Consulta();
$validar = new ValidarPelicula();