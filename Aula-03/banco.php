<?php
class banco
{
    private static $dbName = 'dbbrazuna';
    private static $dbHost = 'localhost';
    private static $dbUser = 'root';
    private static $dbPass = '';
    private static $cont = null;

    public static function conectar()
    {
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$cont;
    }
    public static function desconectar()
    {
        self::$cont = null;
    }
}
