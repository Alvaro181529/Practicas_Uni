<?php
const DB = 'mysql';
const DB_HOST = 'localhost';
const DB_CHARSET = 'utf8';
abstract class DB
{
    private static $user = 'root';
    private static $pass = "";
    private static $host = DB_HOST;
    private static $database = 'cms';
    private static $charset = DB_CHARSET;
    private static $conexion;
    public function conectar()
    {
        try {
            $dsn = 'mysql:host=' . self::$host . '; dbname=' . self::$database;
            $pdo = new PDO($dsn, self::$user, self::$pass);
            $pdo->exec("SET CHARACTER SET ".self::$charset);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        } catch (PDOException $e) {
            exit("ERROR: ".$e->getMessage());
        }
    }
    private function desctonectar()
    {
        $this->conexion = null;
    }
    #CRUD
    abstract protected function insertar($registro);
    abstract protected function consultar();
    abstract protected function actualizar($registro);
    abstract protected function eliminar($accion, $registro);
}
