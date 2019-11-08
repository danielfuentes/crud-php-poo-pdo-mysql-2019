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













































    public function actualizarPelicula($bd,$movies,$pelicula,$id){
        $sql = "update $movies set title=:title,rating=:rating,awards=:awards,release_date=:release_date,             length=:length,genre_id=:genre_id where $movies.id=$id";
        $query = $db->prepare($sql);
        $query->bindValue(':title',$pelicula->getTitle());
        $query->bindValue(':rating',$pelicula->getRating());
        $query->bindValue(':awards',$pelicula->getAwards());
        $query->bindValue(':release_date',$pelicula->getReleaseDate());
        $query->bindValue(':length',$pelicula->getLength());
        $query->bindValue(':genre_id',$pelicula->getGenre());
        $query->execute();
      }
  
}