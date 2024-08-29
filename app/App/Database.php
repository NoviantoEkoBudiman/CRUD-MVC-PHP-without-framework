<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            $host       = 'localhost';
            $dbname     = 'penilaian_karyawan';
            $user       = 'vian';
            $password   = '123456';

            try {
                self::$connection = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Koneksi database gagal: ' . $e->getMessage();
                exit;
            }
        }

        return self::$connection;
    }
}
