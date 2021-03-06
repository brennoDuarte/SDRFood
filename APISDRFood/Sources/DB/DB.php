<?php

class DB {

    private static $con;
    private static $drive = "mysql";
    private static $banco = "db_sdrfood";
    private static $host = "localhost";
    private static $user = "brenno";
    private static $senha = "123";

    public static function Conectar() {

        if (!isset(self::$con)) {
            try {
                self::$con = new PDO(self::$drive . ":host=" . self::$host . ";dbname=" . self::$banco, self::$user, self::$senha);
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return self::$con;
            } catch (PDOException $e) {
                echo "<h3 style='color:red;'>Erro no banco: </h3>" . $e->getMessage();
                die();
            }
        }

        return self::$con;
    }

    public static function prepare($sql) {
        return $stmt = DB::Conectar()->prepare($sql);
    }

    public static function query($sql) {
        return $stmt = DB::Conectar()->query($sql);
    }

}