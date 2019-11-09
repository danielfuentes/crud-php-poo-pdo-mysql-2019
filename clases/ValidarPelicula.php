<?php
class ValidarPelicula{
    public function ValidadorPelicula($pelicula){
        $errores = [];
        $title = trim($pelicula->getTitle());
        if(empty($title)){
            $errores['title'] = "Campo requerido";
        }
        return $errores;
    }
}