<?php
class BaseMysql{
    static public function conexion(){
        try {
            $dsn = "mysql:host=localhost;dbname=movies_db;port=3306;charset=utf8mb4";
            $usuario = "root";
            $password = "root";
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            //Les recuerdo que para el reconocimiento de los errores de mysql, es que incorpormosr esta línea: $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $bd = new PDO($dsn,$usuario,$password,$opt);
            
            return $bd;
        
        } catch (PDOException $error) {
            echo "<h2>No me pude conectar con la Base de Datos...<br></h2>".$error->getMessage();
            exit;
        }
    }


}
