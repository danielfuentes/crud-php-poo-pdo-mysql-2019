<?php
require_once('clases/basemysql.php');
require_once('clases/Consulta.php');
$bd = BaseMysql::conexion();
$consulta = new Consulta();