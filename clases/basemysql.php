<?php
class BaseMysql{
    static public function conexion(){
        try {
            $dsn = "mysql:host=localhost;dbname=movies_db;port=3306;charset=utf8mb4";
            $usuario = "root";
            $password = "root";
            $bd = new PDO($dsn,$usuario,$password);
            return $bd;
        
        } catch (PDOException $error) {
            echo "<h2>No me pude conectar con la Base de Datos...<br></h2>".$error->getMessage();
            exit;
        }
    }


}
