<?php

namespace services;

use PDO;
use PDOException;

class Database
{


    private static string $serverName = 'localhost';
    private static string $userName = 'root';
    private static string $dbName = 'istichara';
    private static string $pass = '';
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO
    {
        if (!self::$pdo) {
            try {
                self::$pdo = new PDO("mysql:host=" . self::$serverName . ";dbname=" . self::$dbName . ";charset=utf8mb4", self::$userName, self::$pass);

                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Connection errour: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
$Pdo = Database::getConnection();
