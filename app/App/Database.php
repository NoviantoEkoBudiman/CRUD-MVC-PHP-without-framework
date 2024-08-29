<?php

namespace App;

use PDO;
use PDOException;
use Dotenv\Dotenv;
require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__."/../../");
$dotenv->load();

class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO("mysql:host=".$_ENV['HOST'].";dbname=".$_ENV['DBNAME'],$_ENV['USER'],$_ENV['PASSWORD']);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Koneksi database gagal: ' . $e->getMessage();
                exit;
            }
        }
        return self::$connection;
    }
}
