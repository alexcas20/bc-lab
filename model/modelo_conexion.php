<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=biocel_lab;host=localhost';
$usuario = 'root';
$contraseña = 'invitado123_';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
class conexionDB
{
    public function conexionPDO(){
        $host = 'localhost';
        $usuario  = 'root';
        $contrasena = 'invitado123_';
        $dbName = 'biocel_lab';

        try{
            $pdo = new PDO("mysql:host=$host;dbname=$dbName",$usuario,$contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
            return $pdo;

        }
        catch(Exception $e){
            echo "la conexion ha fallado";
        }
        
    }

    function cerrar_conexion(){
        $this->pdo=null;
    }

   
}
?>