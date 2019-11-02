<?php
class Consulta{
    public function listarPeliculas($movies,$bd){
        $sql = "select * from $movies";
        $query = $bd->prepare($sql);
        $query->execute();
        $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
        return $peliculas;
    }
    public function listarGeneros($genres,$bd){
        $sql = "select * from $genres";
        $query = $bd->prepare($sql);
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $generos;

    }

}